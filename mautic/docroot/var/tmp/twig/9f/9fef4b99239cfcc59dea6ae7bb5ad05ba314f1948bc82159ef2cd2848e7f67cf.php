<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/LeadBundle/DataFixtures/ORM/fakeleaddata.csv */
class __TwigTemplate_0e9ca71362ff9763c92533c8a1a8457c6555606250e0226381df38453fd0f298 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "title,firstname,lastname,city,address1,state,zipcode,country,email,phone,company,website,facebook,twitter,ip,points
Mrs.,Penny,Moore,HEWELSFIELD COMMON,88 Clasper Way,,GL15 1XD,United Kingdom,PennyKMoore@dayrep.com,070 7086 0753,Williams Bros.,WikiFire.co.uk,PennyKMoore,PennyKMoore,44.242.120.158,100
Mr.,Henry,Catalano,Rustenburg,960 Doreen St,North West,347,South Africa,HenryLCatalano@einrot.com,082 118 9037,Pro Garden Management,MultiFlavors.co.za,HenryLCatalano,HenryLCatalano,83.215.242.109,0
Ms.,Stephanie,Cone,PANT,2 Hull Road,,SY10 6ND,United Kingdom,StephanieMCone@teleworm.us,078 4515 7520,Success Is Yours,CampingProfessionals.co.uk,StephanieMCone,StephanieMCone,169.194.102.58,0
Mr.,Andrew,Flanagan,WEATHERCOTE,40 Simone Weil Avenue,,LA6 6ZT,United Kingdom,AndrewVFlanagan@dayrep.com,077 6574 7295,William Wanamaker & Sons,CommonFit.co.uk,AndrewVFlanagan,AndrewVFlanagan,12.53.195.22,0
Mr.,Daniel,Wright,Qumbu,1084 Bhoola Rd,Eastern Cape,5185,South Africa,DanielAWright@dayrep.com,082 673 3168,Purity Supreme,MysteryShoes.co.za,DanielAWright,DanielAWright,86.210.48.56,0
Mr.,Jose,Patton,Ashcroft,727 Mesa Vista Drive,BC,V0K 1A0,Canada,JoseMPatton@jourrapide.com,250-453-4211,Cut Rite,CartridgeExpo.ca,JoseMPatton,JoseMPatton,205.240.234.201,0
Dr.,Jean,Cross,WEST CHINNOCK,28 Warren St,,TA18 7XS,United Kingdom,JeanGCross@armyspy.com,077 8114 7167,Superior Appraisals,FirstInstructor.co.uk,JeanGCross,JeanGCross,160.183.198.246,0
Mr.,Kevin,Kennedy,COLBROOK,3 Fitzroy Street,VIC,3342,Australia,KevinBKennedy@gustr.com,(03) 5330 2874,Franklin Simon,SlamLounge.com.au,KevinBKennedy,KevinBKennedy,185.58.123.229,0
Mr.,Leonard,Sinclair,Cape Town,719 Loop St,Western Cape,7435,South Africa,LeonardMSinclair@teleworm.us,084 524 8203,Thorofare,SizeMedium.co.za,LeonardMSinclair,LeonardMSinclair,46.243.132.129,0
Mr.,Bruce,Campbell,MOOLBOOLAMAN,7 Delan Road,QLD,4671,Australia,BruceMCampbell@einrot.com,(07) 3187 6375,Town and Country Convenience Stores,RightWingLunacy.com.au,BruceMCampbell,BruceMCampbell,204.119.237.119,0
Ms.,Guadalupe,Strauss,TOOLIBIN,2 Loris Way,WA,6312,Australia,GuadalupeHStrauss@teleworm.us,(08) 9029 4631,Gas Zone,ShowDirectories.com.au,GuadalupeHStrauss,GuadalupeHStrauss,59.85.176.70,0
Ms.,Pamela,Wise,WARROCK,25 Normans Road,VIC,3312,Australia,PamelaSWise@gustr.com,(03) 5389 0975,Showbiz Pizza Place,IRCMagazine.com.au,PamelaSWise,PamelaSWise,137.116.91.223,0
Ms.,Margaret,Maguire,Laurentides,282 rue des Églises Est,QC,J0R 1C0,Canada,MargaretDMaguire@cuvox.de,450-439-2306,Pender's Food Stores,AmateurCredit.ca,MargaretDMaguire,MargaretDMaguire,72.139.24.22,0
Ms.,Regina,Dolph,SOLAS,27 Hounslow Rd,,HS6 2YL,United Kingdom,ReginaBDolph@teleworm.us,077 0685 3094,Record & Tape Outlet,MediumNews.co.uk,ReginaBDolph,ReginaBDolph,125.4.222.31,0
Mrs.,Paula,Hill,Brits,2383 South St,North West,220,South Africa,PaulaWHill@dayrep.com,085 488 7773,Alladin's Lamp,DominoRoom.co.za,PaulaWHill,PaulaWHill,187.166.22.117,0
Mr.,Jimmy,Sanchez,COQUETTE POINT,90 Boulter Close,QLD,4860,Australia,JimmyCSanchez@dayrep.com,(07) 4042 9552,On Cue,GrandMassage.com.au,JimmyCSanchez,JimmyCSanchez,224.145.91.15,0
Ms.,Mildred,Rodriguez,BADGERIN ROCK,17 Muscat Street,WA,6475,Australia,MildredARodriguez@rhyta.com,(08) 9060 4567,Team Electronics,DoubleLimousine.com.au,MildredARodriguez,MildredARodriguez,134.222.144.84,0
Mrs.,Kyung,Brittain,MIDDLE BROOK,17 Hart Street,NSW,2337,Australia,KyungBBrittain@dayrep.com,(02) 4997 6844,Dream Home Improvements,BloggerRoom.com.au,KyungBBrittain,KyungBBrittain,86.127.202.144,0
Mr.,Willie,Perez,Albuquerque,3683 Byrd Lane,NM,87112,United States,WillieJPerez@jourrapide.com,505-292-1492,Crandall's Fine Furniture,ThermalNetworks.com,WillieJPerez,WillieJPerez,211.124.214.94,0
Mr.,Marvin,Patterson,TREFNANNEY,40 Glandovey Terrace,,SY22 2AD,United Kingdom,MarvinPPatterson@jourrapide.com,079 4031 1312,Chi-Chi's,FabulousSeats.co.uk,MarvinPPatterson,MarvinPPatterson,240.51.62.57,0
Ms.,Rosemary,Salinas,Brakpan,2131 Hoog St,Gauteng,1544,South Africa,RosemaryKSalinas@superrito.com,083 893 4273,Omni Tech,RegionHotels.co.za,RosemaryKSalinas,RosemaryKSalinas,189.86.78.59,0
Mr.,Paul,Wilson,Petit,244 Hoog St,Gauteng,1512,South Africa,PaulDWilson@superrito.com,085 388 8905,Magna Solution,WebDivorces.co.za,PaulDWilson,PaulDWilson,89.46.89.21,0
Ms.,Roxie,Shaw,RHAOINE,97 Boat Lane,,IV28 9UH,United Kingdom,RoxieLShaw@fleckens.hu,079 6441 8665,Old America Stores,WifeReplacement.co.uk,RoxieLShaw,RoxieLShaw,211.111.137.180,0
Ms.,Angie,Robles,Stoney Creek,2393 Barton Street,ON,L8G 2V1,Canada,AngieHRobles@einrot.com,905-573-0032,Pro Garden Management,EscrowWireless.ca,AngieHRobles,AngieHRobles,2.227.195.136,0
Mrs.,Charlotte,Fender,Des Moines,113 Nutters Barn Lane,IA,50313,United States,CharlotteAFender@einrot.com,515-729-9343,CSK Auto,AffordableIncentive.com,CharlotteAFender,CharlotteAFender,194.85.219.26,0
Mrs.,Lashawnda,Joseph,LYDFORD-ON-FOSSE,43 South Crescent,,TA11 7UU,United Kingdom,LashawndaDJoseph@gustr.com,070 1704 6116,Tam's Stationers,MakeupDiscounts.co.uk,LashawndaDJoseph,LashawndaDJoseph,211.167.170.168,0
Mrs.,Helen,Manley,Creighton,339 Impala St,KwaZulu-Natal,3263,South Africa,HelenPManley@dayrep.com,082 107 6053,Farrell's Ice Cream Parlour,BankingVentures.co.za,HelenPManley,HelenPManley,36.129.7.21,0
Ms.,Annie,Richarson,Adrian,40 Amethyst Drive,MI,49221,United States,AnnieARicharson@armyspy.com,517-266-4755,Bodega Club,GolfCleaners.com,AnnieARicharson,AnnieARicharson,179.68.77.113,0
Ms.,Mary,Nevarez,AITH,76 Asfordby Rd,,ZE2 4FH,United Kingdom,MaryWNevarez@armyspy.com,077 8292 2559,Builders Square,JollyForum.co.uk,MaryWNevarez,MaryWNevarez,153.154.172.242,0
Mr.,David,Fahy,NEW ULVA,28 Lairg Road,,PA31 8WG,United Kingdom,DavidEFahy@dayrep.com,079 7960 8698,Bumper to Bumper Auto Parts,SearchWealth.co.uk,DavidEFahy,DavidEFahy,199.7.8.156,0
Mr.,Aaron,Guild,EWLOE,86 Wrexham Rd,,CH5 9LB,United Kingdom,AaronMGuild@rhyta.com,070 8638 9402,Scotty's Builders Supply,MobLag.co.uk,AaronMGuild,AaronMGuild,90.41.142.23,0
Mr.,Lee,Cole,Marble Hall,1969 Dikbas Road,Mpumalanga,451,South Africa,LeeACole@fleckens.hu,085 470 6278,Checker Auto Parts,BadProtection.co.za,LeeACole,LeeACole,209.183.6.82,0
Mr.,Matthew,Dell,Aberdeen,1087 Hartway Street,SD,57401,United States,MatthewSDell@armyspy.com,605-790-9178,Wealthy Ideas,FireGourd.com,MatthewSDell,MatthewSDell,92.90.197.187,0
Ms.,Raquel,O'Sullivan,Windsor,1227 Goyeau Ave,ON,N9A 1H9,Canada,RaquelTOSullivan@gustr.com,519-919-6675,Asian Solutions,RobotMarketing.ca,RaquelTOSullivan,RaquelTOSullivan,38.82.155.239,0
Mrs.,Debra,Shackelford,Longueuil,1879 rue Saint-Charles,QC,J4H 1M3,Canada,DebraCShackelford@dayrep.com,450-463-1825,Lum's,BetterSearchTool.ca,DebraCShackelford,DebraCShackelford,93.213.3.76,0
Ms.,Marcia,Hibbard,Pritchard,4251 Blind Bay Road,BC,V0E 2P0,Canada,MarciaBHibbard@fleckens.hu,250-577-9200,Stop N Shop,DishRebates.ca,MarciaBHibbard,MarciaBHibbard,52.122.202.53,0
Mr.,Thomas,Domingue,Hummelstown,1988 Lincoln Drive,PA,17036,United States,ThomasJDomingue@armyspy.com,717-566-3468,Holly Tree Inn,ThinkingMeds.com,ThomasJDomingue,ThomasJDomingue,235.234.136.88,0
Mr.,Jeremy,Newell,Oshtemo,600 Shingleton Road,MI,49077,United States,JeremyJNewell@fleckens.hu,269-372-6669,Leo's Stereo,ZBlvd.com,JeremyJNewell,JeremyJNewell,10.248.239.100,0
Mr.,Justin,Waller,Johannesburg,1348 President St,Gauteng,2102,South Africa,JustinRWaller@cuvox.de,083 324 8545,LoRay,SecurityWorkshops.co.za,JustinRWaller,JustinRWaller,34.126.122.243,0
Ms.,Brenda,Bolton,Temba,2143 Robertson Ave,North West,505,South Africa,BrendaWBolton@dayrep.com,083 411 4857,Huffman and Boyle,GuyHumor.co.za,BrendaWBolton,BrendaWBolton,54.128.70.146,0
Ms.,Renee,Smith,WATTLE RIDGE,44 Railway Street,QLD,4357,Australia,ReneeTSmith@teleworm.us,(07) 4527 1699,Linens 'n Things,ShowFever.com.au,ReneeTSmith,ReneeTSmith,218.13.78.2,0
Mr.,David,Cook,Ga-Maraba,1818 Mark Street,Limpopo,705,South Africa,DavidECook@dayrep.com,083 326 3665,Big Star Markets,CreditCardChronicles.co.za,DavidECook,DavidECook,94.232.240.187,0
Mrs.,June,Bond,St Barthelemy,1921 chemin Georges,QC,J0K 1X0,Canada,JuneLBond@superrito.com,450-885-5404,Realty Depot,NoteNews.ca,JuneLBond,JuneLBond,190.243.9.242,0
Mr.,James,Duffy,Greensboro,3716 Keyser Ridge Road,NC,27401,United States,JamesTDuffy@armyspy.com,336-508-1155,Reliable Guidance,AnonymousMortgage.com,JamesTDuffy,JamesTDuffy,110.211.41.91,0
Mr.,Jonathan,Lane,Nelspruit,1408 Ireland St,Mpumalanga,1220,South Africa,JonathanJLane@jourrapide.com,082 917 7446,Life Map,YouBlogs.co.za,JonathanJLane,JonathanJLane,190.176.178.200,0
Mr.,Peter,Howard,Vancouver,4514 Robson St,BC,V6B 3K9,Canada,PeterJHoward@armyspy.com,604-916-2079,Payless Cashways,FriendTraders.ca,PeterJHoward,PeterJHoward,169.163.46.203,0
Ms.,Irene,Martin,Ottawa,2312 Bank St,ON,K1H 7Z1,Canada,IreneGMartin@cuvox.de,613-818-9603,Helios Air,ForumJet.ca,IreneGMartin,IreneGMartin,34.167.191.88,0
Mr.,David,Jameson,MUGINCOBLE,52 Tooraweenah Road,NSW,2870,Australia,DavidLJameson@einrot.com,(02) 4069 4141,House Of Denmark,ModelSolar.com.au,DavidLJameson,DavidLJameson,41.6.233.4,0
Mr.,Lewis,Syed,Statesboro,107 Yorkie Lane,GA,30458,United States,LewisTSyed@gustr.com,912-682-3070,Record Bar,BetterSearchTool.com,LewisTSyed,LewisTSyed,18.57.6.112,0
Ms.,Nellie,Baird,Port Elizabeth,1930 Uitsig St,Eastern Cape,6204,South Africa,NellieABaird@armyspy.com,083 926 4318,Huyler's,CosmeticsCritic.co.za,NellieABaird,NellieABaird,34.245.44.224,0
,,,Port Elizabeth,1930 Uitsig St,Eastern Cape,6204,South Africa,,,,,,,34.245.44.224,0
,,,Port Elizabeth,1930 Uitsig St,Eastern Cape,6204,South Africa,,,,,,,34.245.44.224,0
,,,Port Elizabeth,1930 Uitsig St,Eastern Cape,6204,South Africa,,,,,,,34.245.44.224,0
,,,Port Elizabeth,1930 Uitsig St,Eastern Cape,6204,South Africa,,,,,,,34.245.44.224,0";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/DataFixtures/ORM/fakeleaddata.csv";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/fakeleaddata.csv", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/DataFixtures/ORM/fakeleaddata.csv");
    }
}