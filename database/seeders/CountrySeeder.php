<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $countries = [
            array('id' => '1','name_ar' => 'أندورا','name_fr' => 'Andorre','name_en' => 'Andorra','code' => 'ad'),
            array('id' => '2','name_ar' => 'الإمارات العربية المتحدة','name_fr' => 'Emirats Arabes Unis','name_en' => 'United Arab Emirates','code' => 'ae'),
            array('id' => '3','name_ar' => 'أفغانستان','name_fr' => 'L\'Afghanistan','name_en' => 'Afghanistan','code' => 'af'),
            array('id' => '4','name_ar' => 'أنتيغوا وبربودا','name_fr' => 'Antigua-et-Barbuda','name_en' => 'Antigua and Barbuda','code' => 'ag'),
            array('id' => '5','name_ar' => 'أنغيلا','name_fr' => 'Anguilla','name_en' => 'Anguilla','code' => 'ai'),
            array('id' => '6','name_ar' => 'ألبانيا','name_fr' => 'Albanie','name_en' => 'Albania','code' => 'al'),
            array('id' => '7','name_ar' => 'أرمينيا','name_fr' => 'Arménie','name_en' => 'Armenia','code' => 'am'),
            array('id' => '8','name_ar' => 'جزر الأنتيل الهولندية','name_fr' => 'Antilles néerlandaises','name_en' => 'Netherlands Antilles','code' => 'an'),
            array('id' => '9','name_ar' => 'أنغولا','name_fr' => 'Angola','name_en' => 'Angola','code' => 'ao'),
            array('id' => '10','name_ar' => 'الأرجنتين','name_fr' => 'Argentine','name_en' => 'Argentina','code' => 'ar'),
            array('id' => '11','name_ar' => 'النمسا','name_fr' => 'L\'Autriche','name_en' => 'Austria','code' => 'at'),
            array('id' => '12','name_ar' => 'أستراليا','name_fr' => 'Australie','name_en' => 'Australia','code' => 'au'),
            array('id' => '13','name_ar' => 'أروبا','name_fr' => 'Aruba','name_en' => 'Aruba','code' => 'aw'),
            array('id' => '14','name_ar' => 'أذربيجان','name_fr' => 'Azerbaïdjan','name_en' => 'Azerbaijan','code' => 'az'),
            array('id' => '15','name_ar' => 'البوسنة والهرسك','name_fr' => 'Bosnie Herzégovine','name_en' => 'Bosnia and Herzegovina','code' => 'ba'),
            array('id' => '16','name_ar' => 'بربادوس','name_fr' => 'La Barbade','name_en' => 'Barbados','code' => 'bb'),
            array('id' => '17','name_ar' => 'بنغلاديش','name_fr' => 'Bangladesh','name_en' => 'Bangladesh','code' => 'bd'),
            array('id' => '18','name_ar' => 'بلجيكا','name_fr' => 'Belgique','name_en' => 'Belgium','code' => 'be'),
            array('id' => '19','name_ar' => 'بوركينا فاسو','name_fr' => 'Burkina Faso','name_en' => 'Burkina Faso','code' => 'bf'),
            array('id' => '20','name_ar' => 'بلغاريا','name_fr' => 'Bulgarie','name_en' => 'Bulgaria','code' => 'bg'),
            array('id' => '21','name_ar' => 'البحرين','name_fr' => 'Bahreïn','name_en' => 'Bahrain','code' => 'bh'),
            array('id' => '22','name_ar' => 'بوروندي','name_fr' => 'Burundi','name_en' => 'Burundi','code' => 'bi'),
            array('id' => '23','name_ar' => 'بنين','name_fr' => 'Bénin','name_en' => 'Benin','code' => 'bj'),
            array('id' => '24','name_ar' => 'برمودا','name_fr' => 'Bermudes','name_en' => 'Bermuda','code' => 'bm'),
            array('id' => '25','name_ar' => 'بروناي دار السلام','name_fr' => 'Brunei Darussalam','name_en' => 'Brunei Darussalam','code' => 'bn'),
            array('id' => '26','name_ar' => 'بوليفيا','name_fr' => 'Bolivie','name_en' => 'Bolivia','code' => 'bo'),
            array('id' => '27','name_ar' => 'البرازيل','name_fr' => 'Brésil','name_en' => 'Brazil','code' => 'br'),
            array('id' => '28','name_ar' => 'الباهاما','name_fr' => 'Bahamas','name_en' => 'Bahamas','code' => 'bs'),
            array('id' => '29','name_ar' => 'بوتان','name_fr' => 'Bhoutan','name_en' => 'Bhutan','code' => 'bt'),
            array('id' => '30','name_ar' => 'بوتسوانا','name_fr' => 'Botswana','name_en' => 'Botswana','code' => 'bw'),
            array('id' => '31','name_ar' => 'روسيا البيضاء','name_fr' => 'Biélorussie','name_en' => 'Belarus','code' => 'by'),
            array('id' => '32','name_ar' => 'بليز','name_fr' => 'Belize','name_en' => 'Belize','code' => 'bz'),
            array('id' => '33','name_ar' => 'كندا','name_fr' => 'Canada','name_en' => 'Canada','code' => 'ca'),
            array('id' => '34','name_ar' => 'جزر كوكوس (كيلينغ)','name_fr' => 'Îles Cocos (Keeling)','name_en' => 'Cocos (Keeling) Islands','code' => 'cc'),
            array('id' => '35','name_ar' => 'جمهورية الكونغو الديموقراطية','name_fr' => 'République Démocratique du Congo','name_en' => 'Democratic Republic of the Congo','code' => 'cd'),
            array('id' => '36','name_ar' => 'جمهورية افريقيا الوسطى','name_fr' => 'République centrafricaine','name_en' => 'Central African Republic','code' => 'cf'),
            array('id' => '37','name_ar' => 'الكونغو','name_fr' => 'Congo','name_en' => 'Congo','code' => 'cg'),
            array('id' => '38','name_ar' => 'سويسرا','name_fr' => 'Suisse','name_en' => 'Switzerland','code' => 'ch'),
            array('id' => '39','name_ar' => 'ساحل العاج (ساحل العاج)','name_fr' => 'Cote D\'Ivoire (Côte d\'Ivoire)','name_en' => 'Cote D\'Ivoire (Ivory Coast)','code' => 'ci'),
            array('id' => '40','name_ar' => 'جزر كوك','name_fr' => 'les Îles Cook','name_en' => 'Cook Islands','code' => 'ck'),
            array('id' => '41','name_ar' => 'تشيلي','name_fr' => 'Chili','name_en' => 'Chile','code' => 'cl'),
            array('id' => '42','name_ar' => 'الكاميرون','name_fr' => 'Cameroun','name_en' => 'Cameroon','code' => 'cm'),
            array('id' => '43','name_ar' => 'الصين','name_fr' => 'Chine','name_en' => 'China','code' => 'cn'),
            array('id' => '44','name_ar' => 'كولومبيا','name_fr' => 'Colombie','name_en' => 'Colombia','code' => 'co'),
            array('id' => '45','name_ar' => 'كوستا ريكا','name_fr' => 'Costa Rica','name_en' => 'Costa Rica','code' => 'cr'),
            array('id' => '46','name_ar' => 'كوبا','name_fr' => 'Cuba','name_en' => 'Cuba','code' => 'cu'),
            array('id' => '47','name_ar' => 'الرأس الأخضر','name_fr' => 'Cap-Vert','name_en' => 'Cape Verde','code' => 'cv'),
            array('id' => '48','name_ar' => 'جزيرة الكريسماس','name_fr' => 'L\'île de noël','name_en' => 'Christmas Island','code' => 'cx'),
            array('id' => '49','name_ar' => 'قبرص','name_fr' => 'Chypre','name_en' => 'Cyprus','code' => 'cy'),
            array('id' => '50','name_ar' => 'جمهورية التشيك','name_fr' => 'République Tchèque','name_en' => 'Czech Republic','code' => 'cz'),
            array('id' => '51','name_ar' => 'ألمانيا','name_fr' => 'Allemagne','name_en' => 'Germany','code' => 'de'),
            array('id' => '52','name_ar' => 'جيبوتي','name_fr' => 'Djibouti','name_en' => 'Djibouti','code' => 'dj'),
            array('id' => '53','name_ar' => 'الدنمارك','name_fr' => 'Danemark','name_en' => 'Denmark','code' => 'dk'),
            array('id' => '54','name_ar' => 'دومينيكا','name_fr' => 'Dominique','name_en' => 'Dominica','code' => 'dm'),
            array('id' => '55','name_ar' => 'جمهورية الدومنيكان','name_fr' => 'République Dominicaine','name_en' => 'Dominican Republic','code' => 'do'),
            array('id' => '56','name_ar' => 'الجزائر','name_fr' => 'Algérie','name_en' => 'Algeria','code' => 'dz'),
            array('id' => '57','name_ar' => 'الإكوادور','name_fr' => 'L\'Équateur','name_en' => 'Ecuador','code' => 'ec'),
            array('id' => '58','name_ar' => 'استونيا','name_fr' => 'Estonie','name_en' => 'Estonia','code' => 'ee'),
            array('id' => '59','name_ar' => 'مصر','name_fr' => 'Egypte','name_en' => 'Egypt','code' => 'eg'),
            array('id' => '60','name_ar' => 'الصحراء الغربية','name_fr' => 'Sahara occidental','name_en' => 'Western Sahara','code' => 'eh'),
            array('id' => '61','name_ar' => 'إريتريا','name_fr' => 'Erythrée','name_en' => 'Eritrea','code' => 'er'),
            array('id' => '62','name_ar' => 'إسبانيا','name_fr' => 'Espagne','name_en' => 'Spain','code' => 'es'),
            array('id' => '63','name_ar' => 'أثيوبيا','name_fr' => 'Ethiopie','name_en' => 'Ethiopia','code' => 'et'),
            array('id' => '64','name_ar' => 'فنلندا','name_fr' => 'Finlande','name_en' => 'Finland','code' => 'fi'),
            array('id' => '65','name_ar' => 'فيجي','name_fr' => 'Fidji','name_en' => 'Fiji','code' => 'fj'),
            array('id' => '66','name_ar' => 'جزر فوكلاند (مالفيناس)','name_fr' => 'Iles Malouines (Malouines)','name_en' => 'Falkland Islands (Malvinas)','code' => 'fk'),
            array('id' => '67','name_ar' => 'ولايات ميكرونيزيا الموحدة','name_fr' => 'États fédérés de Micronésie','name_en' => 'Federated States of Micronesia','code' => 'fm'),
            array('id' => '68','name_ar' => 'جزر صناعية','name_fr' => 'Îles Féroé','name_en' => 'Faroe Islands','code' => 'fo'),
            array('id' => '69','name_ar' => 'فرنسا','name_fr' => 'France','name_en' => 'France','code' => 'fr'),
            array('id' => '70','name_ar' => 'الغابون','name_fr' => 'Gabon','name_en' => 'Gabon','code' => 'ga'),
            array('id' => '71','name_ar' => 'بريطانيا العظمى (المملكة المتحدة)','name_fr' => 'Grande-Bretagne (UK)','name_en' => 'Great Britain (UK)','code' => 'gb'),
            array('id' => '72','name_ar' => 'غرينادا','name_fr' => 'Grenade','name_en' => 'Grenada','code' => 'gd'),
            array('id' => '73','name_ar' => 'جورجيا','name_fr' => 'Géorgie','name_en' => 'Georgia','code' => 'ge'),
            array('id' => '74','name_ar' => 'غيانا الفرنسية','name_fr' => 'Guinée Française','name_en' => 'French Guiana','code' => 'gf'),
            array('id' => '75','name_ar' => 'لا شيء','name_fr' => 'NUL','name_en' => 'NULL','code' => 'gg'),
            array('id' => '76','name_ar' => 'غانا','name_fr' => 'Ghana','name_en' => 'Ghana','code' => 'gh'),
            array('id' => '77','name_ar' => 'جبل طارق','name_fr' => 'Gibraltar','name_en' => 'Gibraltar','code' => 'gi'),
            array('id' => '78','name_ar' => 'الأرض الخضراء','name_fr' => 'Groenland','name_en' => 'Greenland','code' => 'gl'),
            array('id' => '79','name_ar' => 'غامبيا','name_fr' => 'Gambie','name_en' => 'Gambia','code' => 'gm'),
            array('id' => '80','name_ar' => 'غينيا','name_fr' => 'Guinée','name_en' => 'Guinea','code' => 'gn'),
            array('id' => '81','name_ar' => 'جوادلوب','name_fr' => 'La guadeloupe','name_en' => 'Guadeloupe','code' => 'gp'),
            array('id' => '82','name_ar' => 'غينيا الإستوائية','name_fr' => 'Guinée Équatoriale','name_en' => 'Equatorial Guinea','code' => 'gq'),
            array('id' => '83','name_ar' => 'اليونان','name_fr' => 'Grèce','name_en' => 'Greece','code' => 'gr'),
            array('id' => '84','name_ar' => 'جورجيا وجزر ساندويتش','name_fr' => 'Géorgie du Sud et les îles Sandwich du Sud','name_en' => 'S. Georgia and S. Sandwich Islands','code' => 'gs'),
            array('id' => '85','name_ar' => 'غواتيمالا','name_fr' => 'Guatemala','name_en' => 'Guatemala','code' => 'gt'),
            array('id' => '86','name_ar' => 'غينيا بيساو','name_fr' => 'Guinée-Bissau','name_en' => 'Guinea-Bissau','code' => 'gw'),
            array('id' => '87','name_ar' => 'غيانا','name_fr' => 'Guyane','name_en' => 'Guyana','code' => 'gy'),
            array('id' => '88','name_ar' => 'هونغ كونغ','name_fr' => 'Hong Kong','name_en' => 'Hong Kong','code' => 'hk'),
            array('id' => '89','name_ar' => 'هندوراس','name_fr' => 'Honduras','name_en' => 'Honduras','code' => 'hn'),
            array('id' => '90','name_ar' => 'كرواتيا (هرفاتسكا)','name_fr' => 'Croatie (Hrvatska)','name_en' => 'Croatia (Hrvatska)','code' => 'hr'),
            array('id' => '91','name_ar' => 'هايتي','name_fr' => 'Haïti','name_en' => 'Haiti','code' => 'ht'),
            array('id' => '92','name_ar' => 'اليونان','name_fr' => 'Hongrie','name_en' => 'Hungary','code' => 'hu'),
            array('id' => '93','name_ar' => 'أندونيسيا','name_fr' => 'Indonésie','name_en' => 'Indonesia','code' => 'id'),
            array('id' => '94','name_ar' => 'أيرلندا','name_fr' => 'Irlande','name_en' => 'Ireland','code' => 'ie'),
            array('id' => '96','name_ar' => 'الهند','name_fr' => 'Inde','name_en' => 'India','code' => 'in'),
            array('id' => '97','name_ar' => 'العراق','name_fr' => 'Irak','name_en' => 'Iraq','code' => 'iq'),
            array('id' => '98','name_ar' => 'إيران','name_fr' => 'Iran','name_en' => 'Iran','code' => 'ir'),
            array('id' => '99','name_ar' => 'أيسلندا','name_fr' => 'Islande','name_en' => 'Iceland','code' => 'is'),
            array('id' => '100','name_ar' => 'إيطاليا','name_fr' => 'Italie','name_en' => 'Italy','code' => 'it'),
            array('id' => '101','name_ar' => 'جامايكا','name_fr' => 'Jamaïque','name_en' => 'Jamaica','code' => 'jm'),
            array('id' => '102','name_ar' => 'الأردن','name_fr' => 'Jordan','name_en' => 'Jordan','code' => 'jo'),
            array('id' => '103','name_ar' => 'اليابان','name_fr' => 'Japon','name_en' => 'Japan','code' => 'jp'),
            array('id' => '104','name_ar' => 'كينيا','name_fr' => 'Kenya','name_en' => 'Kenya','code' => 'ke'),
            array('id' => '105','name_ar' => 'قرغيزستان','name_fr' => 'Kirghizistan','name_en' => 'Kyrgyzstan','code' => 'kg'),
            array('id' => '106','name_ar' => 'كمبوديا','name_fr' => 'Cambodge','name_en' => 'Cambodia','code' => 'kh'),
            array('id' => '107','name_ar' => 'كيريباس','name_fr' => 'Kiribati','name_en' => 'Kiribati','code' => 'ki'),
            array('id' => '108','name_ar' => 'جزر القمر','name_fr' => 'Comores','name_en' => 'Comoros','code' => 'km'),
            array('id' => '109','name_ar' => 'سانت كيتس ونيفيس','name_fr' => 'Saint-Christophe-et-Niévès','name_en' => 'Saint Kitts and Nevis','code' => 'kn'),
            array('id' => '110','name_ar' => 'كوريا الشمالية','name_fr' => 'Corée du Nord','name_en' => 'Korea (North)','code' => 'kp'),
            array('id' => '111','name_ar' => 'كوريا، جنوب)','name_fr' => 'COREE DU SUD)','name_en' => 'Korea (South)','code' => 'kr'),
            array('id' => '112','name_ar' => 'الكويت','name_fr' => 'Koweit','name_en' => 'Kuwait','code' => 'kw'),
            array('id' => '113','name_ar' => 'جزر كايمان','name_fr' => 'Îles Caïmans','name_en' => 'Cayman Islands','code' => 'ky'),
            array('id' => '114','name_ar' => 'كازاخستان','name_fr' => 'Le kazakhstan','name_en' => 'Kazakhstan','code' => 'kz'),
            array('id' => '115','name_ar' => 'لاوس','name_fr' => 'Laos','name_en' => 'Laos','code' => 'la'),
            array('id' => '116','name_ar' => 'لبنان','name_fr' => 'Liban','name_en' => 'Lebanon','code' => 'lb'),
            array('id' => '117','name_ar' => 'القديسة لوسيا','name_fr' => 'Sainte-Lucie','name_en' => 'Saint Lucia','code' => 'lc'),
            array('id' => '118','name_ar' => 'ليختنشتاين','name_fr' => 'Le Liechtenstein','name_en' => 'Liechtenstein','code' => 'li'),
            array('id' => '119','name_ar' => 'سيريلانكا','name_fr' => 'Sri Lanka','name_en' => 'Sri Lanka','code' => 'lk'),
            array('id' => '120','name_ar' => 'ليبيريا','name_fr' => 'Libéria','name_en' => 'Liberia','code' => 'lr'),
            array('id' => '121','name_ar' => 'ليسوتو','name_fr' => 'Lesotho','name_en' => 'Lesotho','code' => 'ls'),
            array('id' => '122','name_ar' => 'ليتوانيا','name_fr' => 'Lituanie','name_en' => 'Lithuania','code' => 'lt'),
            array('id' => '123','name_ar' => 'لوكسمبورغ','name_fr' => 'Luxembourg','name_en' => 'Luxembourg','code' => 'lu'),
            array('id' => '124','name_ar' => 'لاتفيا','name_fr' => 'Lettonie','name_en' => 'Latvia','code' => 'lv'),
            array('id' => '125','name_ar' => 'ليبيا','name_fr' => 'Libye','name_en' => 'Libya','code' => 'ly'),
            array('id' => '126','name_ar' => 'المغرب','name_fr' => 'Maroc','name_en' => 'Morocco','code' => 'ma'),
            array('id' => '127','name_ar' => 'موناكو','name_fr' => 'Monaco','name_en' => 'Monaco','code' => 'mc'),
            array('id' => '128','name_ar' => 'مولدوفا','name_fr' => 'La Moldavie','name_en' => 'Moldova','code' => 'md'),
            array('id' => '129','name_ar' => 'مدغشقر','name_fr' => 'Madagascar','name_en' => 'Madagascar','code' => 'mg'),
            array('id' => '130','name_ar' => 'جزر مارشال','name_fr' => 'Iles Marshall','name_en' => 'Marshall Islands','code' => 'mh'),
            array('id' => '131','name_ar' => 'مقدونيا','name_fr' => 'Macédoine','name_en' => 'Macedonia','code' => 'mk'),
            array('id' => '132','name_ar' => 'مالي','name_fr' => 'Mali','name_en' => 'Mali','code' => 'ml'),
            array('id' => '133','name_ar' => 'ميانمار','name_fr' => 'Myanmar','name_en' => 'Myanmar','code' => 'mm'),
            array('id' => '134','name_ar' => 'منغوليا','name_fr' => 'Mongolie','name_en' => 'Mongolia','code' => 'mn'),
            array('id' => '135','name_ar' => 'ماكاو','name_fr' => 'Macao','name_en' => 'Macao','code' => 'mo'),
            array('id' => '136','name_ar' => 'جزر مريانا الشمالية','name_fr' => 'Îles Mariannes du Nord','name_en' => 'Northern Mariana Islands','code' => 'mp'),
            array('id' => '137','name_ar' => 'مارتينيك','name_fr' => 'Martinique','name_en' => 'Martinique','code' => 'mq'),
            array('id' => '138','name_ar' => 'موريتانيا','name_fr' => 'Mauritanie','name_en' => 'Mauritania','code' => 'mr'),
            array('id' => '139','name_ar' => 'مونتسيرات','name_fr' => 'Montserrat','name_en' => 'Montserrat','code' => 'ms'),
            array('id' => '140','name_ar' => 'مالطا','name_fr' => 'Malte','name_en' => 'Malta','code' => 'mt'),
            array('id' => '141','name_ar' => 'موريشيوس','name_fr' => 'Maurice','name_en' => 'Mauritius','code' => 'mu'),
            array('id' => '142','name_ar' => 'جزر المالديف','name_fr' => 'Maldives','name_en' => 'Maldives','code' => 'mv'),
            array('id' => '143','name_ar' => 'مالاوي','name_fr' => 'Malawi','name_en' => 'Malawi','code' => 'mw'),
            array('id' => '144','name_ar' => 'المكسيك','name_fr' => 'Mexique','name_en' => 'Mexico','code' => 'mx'),
            array('id' => '145','name_ar' => 'ماليزيا','name_fr' => 'Malaisie','name_en' => 'Malaysia','code' => 'my'),
            array('id' => '146','name_ar' => 'موزمبيق','name_fr' => 'Mozambique','name_en' => 'Mozambique','code' => 'mz'),
            array('id' => '147','name_ar' => 'ناميبيا','name_fr' => 'Namibie','name_en' => 'Namibia','code' => 'na'),
            array('id' => '148','name_ar' => 'كاليدونيا الجديدة','name_fr' => 'Nouvelle Calédonie','name_en' => 'New Caledonia','code' => 'nc'),
            array('id' => '149','name_ar' => 'النيجر','name_fr' => 'Niger','name_en' => 'Niger','code' => 'ne'),
            array('id' => '150','name_ar' => 'جزيرة نورفولك','name_fr' => 'l\'ile de Norfolk','name_en' => 'Norfolk Island','code' => 'nf'),
            array('id' => '151','name_ar' => 'نيجيريا','name_fr' => 'Nigeria','name_en' => 'Nigeria','code' => 'ng'),
            array('id' => '152','name_ar' => 'نيكاراغوا','name_fr' => 'Nicaragua','name_en' => 'Nicaragua','code' => 'ni'),
            array('id' => '153','name_ar' => 'هولندا','name_fr' => 'Pays-Bas','name_en' => 'Netherlands','code' => 'nl'),
            array('id' => '154','name_ar' => 'النرويج','name_fr' => 'Norvège','name_en' => 'Norway','code' => 'no'),
            array('id' => '155','name_ar' => 'نيبال','name_fr' => 'Népal','name_en' => 'Nepal','code' => 'np'),
            array('id' => '156','name_ar' => 'ناورو','name_fr' => 'Nauru','name_en' => 'Nauru','code' => 'nr'),
            array('id' => '157','name_ar' => 'نيوي','name_fr' => 'Niue','name_en' => 'Niue','code' => 'nu'),
            array('id' => '158','name_ar' => 'نيوزيلندا (اوتياروا)','name_fr' => 'Nouvelle-Zélande (Aotearoa)','name_en' => 'New Zealand (Aotearoa)','code' => 'nz'),
            array('id' => '159','name_ar' => 'سلطنة عمان','name_fr' => 'Oman','name_en' => 'Oman','code' => 'om'),
            array('id' => '160','name_ar' => 'بناما','name_fr' => 'Panama','name_en' => 'Panama','code' => 'pa'),
            array('id' => '161','name_ar' => 'بيرو','name_fr' => 'Pérou','name_en' => 'Peru','code' => 'pe'),
            array('id' => '162','name_ar' => 'بولينيزيا الفرنسية','name_fr' => 'Polynésie française','name_en' => 'French Polynesia','code' => 'pf'),
            array('id' => '163','name_ar' => 'بابوا غينيا الجديدة','name_fr' => 'Papouasie Nouvelle Guinée','name_en' => 'Papua New Guinea','code' => 'pg'),
            array('id' => '164','name_ar' => 'الفلبين','name_fr' => 'Philippines','name_en' => 'Philippines','code' => 'ph'),
            array('id' => '165','name_ar' => 'باكستان','name_fr' => 'Pakistan','name_en' => 'Pakistan','code' => 'pk'),
            array('id' => '166','name_ar' => 'بولندا','name_fr' => 'Pologne','name_en' => 'Poland','code' => 'pl'),
            array('id' => '167','name_ar' => 'سانت بيير وميكلون','name_fr' => 'Saint Pierre et Miquelon','name_en' => 'Saint Pierre and Miquelon','code' => 'pm'),
            array('id' => '168','name_ar' => 'بيتكيرن','name_fr' => 'Pitcairn','name_en' => 'Pitcairn','code' => 'pn'),
            array('id' => '169','name_ar' => 'الأراضي الفلسطينية','name_fr' => 'Territoire Palestinien','name_en' => 'Palestinian Territory','code' => 'ps'),
            array('id' => '170','name_ar' => 'البرتغال','name_fr' => 'le Portugal','name_en' => 'Portugal','code' => 'pt'),
            array('id' => '171','name_ar' => 'بالاو','name_fr' => 'Palau','name_en' => 'Palau','code' => 'pw'),
            array('id' => '172','name_ar' => 'باراغواي','name_fr' => 'Paraguay','name_en' => 'Paraguay','code' => 'py'),
            array('id' => '173','name_ar' => 'دولة قطر','name_fr' => 'Qatar','name_en' => 'Qatar','code' => 'qa'),
            array('id' => '174','name_ar' => 'جمع شمل','name_fr' => 'Réunion','name_en' => 'Reunion','code' => 're'),
            array('id' => '175','name_ar' => 'رومانيا','name_fr' => 'Roumanie','name_en' => 'Romania','code' => 'ro'),
            array('id' => '176','name_ar' => 'الاتحاد الروسي','name_fr' => 'Fédération Russe','name_en' => 'Russian Federation','code' => 'ru'),
            array('id' => '177','name_ar' => 'رواندا','name_fr' => 'Rwanda','name_en' => 'Rwanda','code' => 'rw'),
            array('id' => '178','name_ar' => 'المملكة العربية السعودية','name_fr' => 'Arabie Saoudite','name_en' => 'Saudi Arabia','code' => 'sa'),
            array('id' => '179','name_ar' => 'جزر سليمان','name_fr' => 'Les îles Salomon','name_en' => 'Solomon Islands','code' => 'sb'),
            array('id' => '180','name_ar' => 'سيشيل','name_fr' => 'les Seychelles','name_en' => 'Seychelles','code' => 'sc'),
            array('id' => '181','name_ar' => 'سودان','name_fr' => 'Soudan','name_en' => 'Sudan','code' => 'sd'),
            array('id' => '182','name_ar' => 'السويد','name_fr' => 'Suède','name_en' => 'Sweden','code' => 'se'),
            array('id' => '183','name_ar' => 'سنغافورة','name_fr' => 'Singapour','name_en' => 'Singapore','code' => 'sg'),
            array('id' => '184','name_ar' => 'سانت هيلانة','name_fr' => 'Sainte Hélène','name_en' => 'Saint Helena','code' => 'sh'),
            array('id' => '185','name_ar' => 'سلوفينيا','name_fr' => 'La slovénie','name_en' => 'Slovenia','code' => 'si'),
            array('id' => '186','name_ar' => 'سفالبارد وجان مايان','name_fr' => 'Svalbard et Jan Mayen','name_en' => 'Svalbard and Jan Mayen','code' => 'sj'),
            array('id' => '187','name_ar' => 'سلوفاكيا','name_fr' => 'La slovaquie','name_en' => 'Slovakia','code' => 'sk'),
            array('id' => '188','name_ar' => 'سيرا ليون','name_fr' => 'Sierra Leone','name_en' => 'Sierra Leone','code' => 'sl'),
            array('id' => '189','name_ar' => 'سان مارينو','name_fr' => 'Saint Marin','name_en' => 'San Marino','code' => 'sm'),
            array('id' => '190','name_ar' => 'السنغال','name_fr' => 'Sénégal','name_en' => 'Senegal','code' => 'sn'),
            array('id' => '191','name_ar' => 'الصومال','name_fr' => 'Somalie','name_en' => 'Somalia','code' => 'so'),
            array('id' => '192','name_ar' => 'سورينام','name_fr' => 'Suriname','name_en' => 'Suriname','code' => 'sr'),
            array('id' => '193','name_ar' => 'ساو تومي وبرنسيبي','name_fr' => 'Sao Tomé et Principe','name_en' => 'Sao Tome and Principe','code' => 'st'),
            array('id' => '194','name_ar' => 'السلفادور','name_fr' => 'Le Salvador','name_en' => 'El Salvador','code' => 'sv'),
            array('id' => '195','name_ar' => 'سوريا','name_fr' => 'Syrie','name_en' => 'Syria','code' => 'sy'),
            array('id' => '196','name_ar' => 'سوازيلاند','name_fr' => 'Swaziland','name_en' => 'Swaziland','code' => 'sz'),
            array('id' => '197','name_ar' => 'جزر تركس وكايكوس','name_fr' => 'îles Turques-et-Caïques','name_en' => 'Turks and Caicos Islands','code' => 'tc'),
            array('id' => '198','name_ar' => 'تشاد','name_fr' => 'Le tchad','name_en' => 'Chad','code' => 'td'),
            array('id' => '199','name_ar' => 'المناطق الجنوبية لفرنسا','name_fr' => 'Terres australes françaises','name_en' => 'French Southern Territories','code' => 'tf'),
            array('id' => '200','name_ar' => 'ليذهب','name_fr' => 'Aller','name_en' => 'Togo','code' => 'tg'),
            array('id' => '201','name_ar' => 'تايلاند','name_fr' => 'Thaïlande','name_en' => 'Thailand','code' => 'th'),
            array('id' => '202','name_ar' => 'طاجيكستان','name_fr' => 'Tadjikistan','name_en' => 'Tajikistan','code' => 'tj'),
            array('id' => '203','name_ar' => 'توكيلاو','name_fr' => 'Tokelau','name_en' => 'Tokelau','code' => 'tk'),
            array('id' => '204','name_ar' => 'تركمانستان','name_fr' => 'Turkménistan','name_en' => 'Turkmenistan','code' => 'tm'),
            array('id' => '205','name_ar' => 'تونس','name_fr' => 'Tunisie','name_en' => 'Tunisia','code' => 'tn'),
            array('id' => '206','name_ar' => 'تونغا','name_fr' => 'Tonga','name_en' => 'Tonga','code' => 'to'),
            array('id' => '207','name_ar' => 'ديك رومي','name_fr' => 'dinde','name_en' => 'Turkey','code' => 'tr'),
            array('id' => '208','name_ar' => 'ترينداد وتوباغو','name_fr' => 'Trinité-et-Tobago','name_en' => 'Trinidad and Tobago','code' => 'tt'),
            array('id' => '209','name_ar' => 'توفالو','name_fr' => 'Tuvalu','name_en' => 'Tuvalu','code' => 'tv'),
            array('id' => '210','name_ar' => 'تايوان','name_fr' => 'Taïwan','name_en' => 'Taiwan','code' => 'tw'),
            array('id' => '211','name_ar' => 'تنزانيا','name_fr' => 'Tanzanie','name_en' => 'Tanzania','code' => 'tz'),
            array('id' => '212','name_ar' => 'أوكرانيا','name_fr' => 'Ukraine','name_en' => 'Ukraine','code' => 'ua'),
            array('id' => '213','name_ar' => 'أوغندا','name_fr' => 'Ouganda','name_en' => 'Uganda','code' => 'ug'),
            array('id' => '214','name_ar' => 'أوروغواي','name_fr' => 'Uruguay','name_en' => 'Uruguay','code' => 'uy'),
            array('id' => '215','name_ar' => 'أوزبكستان','name_fr' => 'Ouzbékistan','name_en' => 'Uzbekistan','code' => 'uz'),
            array('id' => '216','name_ar' => 'سانت فنسنت وجزر غرينادين','name_fr' => 'Saint-Vincent-et-les-Grenadines','name_en' => 'Saint Vincent and the Grenadines','code' => 'vc'),
            array('id' => '217','name_ar' => 'فنزويلا','name_fr' => 'Venezuela','name_en' => 'Venezuela','code' => 've'),
            array('id' => '218','name_ar' => 'جزر العذراء البريطانية)','name_fr' => 'Îles vierges britanniques','name_en' => 'Virgin Islands (British)','code' => 'vg'),
            array('id' => '219','name_ar' => 'جزر فيرجن (الولايات المتحدة)','name_fr' => 'Îles Vierges (États-Unis)','name_en' => 'Virgin Islands (U.S.)','code' => 'vi'),
            array('id' => '220','name_ar' => 'فيتنام','name_fr' => 'Viet Nam','name_en' => 'Viet Nam','code' => 'vn'),
            array('id' => '221','name_ar' => 'فانواتو','name_fr' => 'Vanuatu','name_en' => 'Vanuatu','code' => 'vu'),
            array('id' => '222','name_ar' => 'واليس وفوتونا','name_fr' => 'Wallis et Futuna','name_en' => 'Wallis and Futuna','code' => 'wf'),
            array('id' => '223','name_ar' => 'ساموا','name_fr' => 'Samoa','name_en' => 'Samoa','code' => 'ws'),
            array('id' => '224','name_ar' => 'اليمن','name_fr' => 'Yémen','name_en' => 'Yemen','code' => 'ye'),
            array('id' => '225','name_ar' => 'مايوت','name_fr' => 'Mayotte','name_en' => 'Mayotte','code' => 'yt'),
            array('id' => '226','name_ar' => 'جنوب أفريقيا','name_fr' => 'Afrique du Sud','name_en' => 'South Africa','code' => 'za'),
            array('id' => '227','name_ar' => 'زامبيا','name_fr' => 'Zambie','name_en' => 'Zambia','code' => 'zm'),
            array('id' => '228','name_ar' => 'زائير (سابقة)','name_fr' => 'Zaïre (ancien)','name_en' => 'Zaire (former)','code' => 'zr'),
            array('id' => '229','name_ar' => 'زيمبابوي','name_fr' => 'Zimbabwe','name_en' => 'Zimbabwe','code' => 'zw'),
            array('id' => '230','name_ar' => 'الولايات المتحدة','name_fr' => 'les États-Unis d\'Amérique','name_en' => 'United States of America','code' => 'us'),
            array('id' => '231','name_ar' => 'غير معروف','name_fr' => 'unknown','name_en' => 'unknown','code' => 'null')
        ];



        DB::table('countries')->insert($countries);


    }
}
