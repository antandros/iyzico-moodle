<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Creates a iyzico payment form and show it on course enrolment page
 *
 * This script creates a payment form for iyzico
 * let user to pay and enrol to course.
 *
 * @package    enrol_iyzicopayment
 * @copyright  2019 Dualcube Team
 * @copyright  2021 Made by Sense
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Disable moodle specific debug messages and any errors in output,
// comment out when debugging or better look into error log!
defined('MOODLE_INTERNAL') || die();
global $CFG, $USER;

/**
 * Generate a random string, using a cryptographically secure 
 * pseudorandom number generator (random_int)
 *
 * This function uses type hints now (PHP 7+ only), but it was originally
 * written for PHP 5 as well.
 * 
 * For PHP 7, random_int is a PHP core function
 * For PHP 5.x, depends on https://github.com/paragonie/random_compat
 * 
 * @param int $length      How many characters do we want?
 * @param string $keyspace A string of all possible characters
 *                         to select from
 * @return string
 */
function random_str(
  int $length = 64,
  string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
  if ($length < 1) {
    throw new \RangeException("Length must be a positive integer");
  }
  $pieces = [];
  $max = mb_strlen($keyspace, '8bit') - 1;
  for ($i = 0; $i < $length; ++$i) {
    $pieces[] = $keyspace[random_int(0, $max)];
  }
  return implode('', $pieces);
}

//  iyzipay testcode START

require_once "iyzipay/IyzipayBootstrap.php";
IyzipayBootstrap::init();

$iyzipayOptions = new \Iyzipay\Options();
$iyzipayOptions->setApiKey($this->get_config('publishablekey'));
$iyzipayOptions->setSecretKey($this->get_config('secretkey'));
if ($this->get_config('sandboxmode')) {
  $iyzipayOptions->setBaseUrl('https://sandbox-api.iyzipay.com');
} else {
  $iyzipayOptions->setBaseUrl('https://api.iyzipay.com');
}

# create request class
$request = new \Iyzipay\Request\CreateCheckoutFormInitializeRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId(random_str(9) . "-" . $USER->id . "-" . $course->id . "-" . $instance->id);
$request->setBasketId(random_str(9) . "-" . $USER->id . "-" . $course->id . "-" . $instance->id);
$request->setPrice($cost);
$request->setPaidPrice($cost);
$request->setCurrency($instance->currency);
$request->setCallbackUrl($CFG->wwwroot . "/enrol/iyzicopayment/callback.php");
$request->setEnabledInstallments(array(1));

$buyer = new \Iyzipay\Model\Buyer();
$buyer->setId($USER->id);
$buyer->setName($USER->firstname);
$buyer->setSurname($USER->lastname);
$buyer->setEmail($USER->email);
$buyer->setIdentityNumber("11111111111");
$buyer->setRegistrationAddress($USER->address . ".");
$buyer->setIp($USER->lastip);
$buyer->setCity($USER->city . ".");
$buyer->setCountry($USER->country . ".");
$buyer->setZipCode("34000");

$request->setBuyer($buyer);

$userAddress = new \Iyzipay\Model\Address();
$userAddress->setContactName(fullname($USER));
$userAddress->setCity($USER->city . ".");
$userAddress->setCountry($USER->country . ".");
$userAddress->setAddress($USER->address . ".");
$userAddress->setZipCode("34000");

$request->setShippingAddress($userAddress);
$request->setBillingAddress($userAddress);

$courseAsBasketItem = new \Iyzipay\Model\BasketItem();
$courseAsBasketItem->setId($course->id);
$courseAsBasketItem->setName($coursefullname);
$courseAsBasketItem->setCategory1("Courses");
$courseAsBasketItem->setCategory2($courseshortname);
$courseAsBasketItem->setItemType(\Iyzipay\Model\BasketItemType::VIRTUAL);
$courseAsBasketItem->setPrice($cost);

$request->setBasketItems([$courseAsBasketItem]);

# make request
$checkoutFormInitialize = \Iyzipay\Model\CheckoutFormInitialize::create($request, $iyzipayOptions);
//  iyzipay testcode END

?>
<div>
  <p><?php print_string("paymentrequired") ?></p>
  <?php if ($checkoutFormInitialize->getStatus() == "success") : ?>
    <?php echo $checkoutFormInitialize->getCheckoutFormContent(); ?>
    <div id="iyzipay-checkout-form" class="responsive"></div>
  <?php else : ?>
    <p>
      <?php echo $checkoutFormInitialize->getErrorCode(); ?> - <?php echo $checkoutFormInitialize->getErrorMessage(); ?>
    </p>
  <?php endif; ?>
</div>