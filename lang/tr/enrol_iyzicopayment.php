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
 *
 * @package    enrol_iyzicopayment
 * @copyright  2021 Antandros Teknoloji
 * @license    http://www.gnu.org/licenses/agpl-3.0.html GNU AGPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applycode'] = 'Kodu girin';
$string['assignrole'] = 'Rol belirle';
$string['canntenrol'] = 'Kayıt devredışı veya etkin değil';
$string['charge_description1'] = 'Makbuz için müşteri oluştur';
$string['charge_description2'] = 'Kurs kayıt ücretini tahsil et';
$string['cost'] = 'Kayıt ücreti';
$string['costerror'] = 'Kayıt ücreti sayı olmak zorundadır.';
$string['costorkey'] = 'Lütfen bir kayıt yöntemi seçin.';
$string['couponcode'] = 'Kupon kodu';
$string['currency'] = 'Para birimi';
$string['defaultrole'] = 'Varsayılan rol ataması';
$string['defaultrole_desc'] = 'İyzico kayıtları sırasında kullanıcılara atanacak rolü seçin';
$string['enrol'] = 'Kayıt ol';
$string['enrolenddate'] = 'Son kayıt tarihi';
$string['enrolenddaterror'] = 'Son kayıt tarihi, kayıt başlangıç tarihinden önce olamaz';
$string['enrolenddate_help'] = 'Eğer etkinleştirilirse kullanıcılar bu tarihten daha önce kayıt olamazlar.';
$string['enrolperiod'] = 'Kayıt süresi';
$string['enrolperiod_desc'] = 'Kaydın geçerli olacağı varsayılan süre. Eğer değer 0 olarak ayarlanırsa süre sınırsız olacaktır.';
$string['enrolperiod_help'] = 'Üye kayıt olduktan sonra kaydın geçerlilik süres. Eğer devre dışı bırakılırsa süre sınırsız olacaktır.';
$string['enrolstartdate'] = 'Kayıt başlangıç tarihi';
$string['enrolstartdate_help'] = 'Eğer etkinleştirilirse kullanıcılar bu tarihten sonra kayıt olabilir.';
$string['expiredaction'] = 'Kayıt geçerlilik süresi dolunca gerçekleştirilecek eylem';
$string['expiredaction_help'] = 'Kullanıcı kaydı zaman aşımına uğradığında ne olacağını seçin. Lütfen kayıt silme sırasında kimi kullanıcı veri ve ayarlarının sistemden silindiğine dikkat edin.';
$string['invalidcouponcode'] = 'Geçersiz Kupon Kodu';
$string['invalidcouponcodevalue'] = 'Kupon Kodu {$a} geçersiz!';
$string['iyzico:manage'] = 'Kayıtlı kullanıcıları yönetin';
$string['iyzico:unenrol'] = 'Dersten kullanıcı kayıtlarını silin';
$string['iyzico:unenrolself'] = 'Kendi kaydını dersten sil';
$string['iyzicoaccepted'] = 'iyzico ödemesi kabul edildi';
$string['iyzicopayment:config'] = 'iyzico ödeme yapılandırması';
$string['iyzicopayment:manage'] = 'iyzico ödeme yönetimi';
$string['iyzicopayment:unenrol'] = 'iyzico ödeme kaydını sil';
$string['iyzicopayment:unenrolself'] = 'Kendi iyzico ödeme kaydını sil';
$string['iyzico_sorry'] = 'Üzgünüz, betiği bu şekilde kullanamazsınız.';
$string['mailadmins'] = 'Yöneticiye haber ver';
$string['mailstudents'] = 'Öğrencilere haber ver';
$string['mailteachers'] = 'Öğretmenlere haber ver';
$string['maxenrolled'] = 'Azami kayıtlı kullanıcı';
$string['maxenrolledreached'] = 'İzin verilen azami kayıt sayısına ulaşıldı.';
$string['maxenrolled_help'] = 'iyzico ile kursa kaydı alınacak kullanıcı sayısını girin. 0 sınırsız anlamına gelir.';
$string['messageprovider:iyzicopayment_enrolment'] = 'Mesaj sağlayıcı';
$string['messageprovider:iyzico_enrolment'] = 'iyzico kayıt mesajları';
$string['newcost'] = 'Yeni ücret';
$string['nocost'] = 'Bu derse kaydolmak için belirlenmiş bir ücret yok.';
$string['pluginname'] = 'iyzico Ödeme';
$string['pluginname_desc'] = 'iyzipay modülü ücretli dersler sunmanızı sağlar. Eğer herhangi bir ders ücretsiz ise, öğrencilerden giriş için ödeme talep edilmez. Tüm site çapında varsayılan olarak belirleyebileceğiniz bir ücret ayarı olduğu gibi her ders için tek tek ücret belirleyebileceğiniz bir ayar da mevcuttur. Ders ücreti site çapındaki ücreti devre dışı bırakır.';
$string['publishablekey'] = 'İyzico API Anahtarı';
$string['publishablekey_desc'] = 'iyzico tarafından verilen API anahtarı';
$string['sandboxmode'] = 'iyzico deneme modu';
$string['sandboxmode_desc'] = 'Hata ayıklama ve test için iyzico deneme modunu kullanın';
$string['secretkey'] = 'iyzico Gizli Anahtarı';
$string['secretkey_desc'] = 'iyzico tarafından verilen API Gizli Anahtarı';
$string['sendpaymentbutton'] = 'iyzico ile ödeme yap';
$string['status'] = 'iyzico kayıtlarına izin ver';
$string['status_desc'] = 'Kullanıcıların varsayılan olarak iyzico ile kayıt olmasına izin ver.';
$string['unenrolselfconfirm'] = '"{$a}" dersinden kaydınızı silmek istediğinize emin misiniz?';
