<?php

namespace App\Http\Controllers;

use App\Exports\excelExport;
use App\ImoMda;
use App\ImoService;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

set_time_limit(0);


class ExcelController extends Controller
{
   public function index(){
    $transactions = [
        0 => [
          'TRANSACTION REF. NO' => 'MNTAS0YL47JGADFXA0RQ',
          '' => '',
          'PAYDIRECT' => '2,200',
          'MONETA' => '3325',
          'Bank' => 'IFIS',
          'Agent name' => '',
        ],
        1 => [
          'TRANSACTION REF. NO' => 'MNTAENGXBR9EZG86KMFZ',
          '' => '',
          'PAYDIRECT' => '3325',
          'MONETA' => '2750',
          'Bank' => '',
          'Agent name' => '',
        ],
        2 => [
          'TRANSACTION REF. NO' => 'MNTABKWJPBJTFNYFJRDR',
          '' => '',
          'PAYDIRECT' => '2750',
          'MONETA' => '4825',
          'Bank' => '',
          'Agent name' => '',
        ],
        3 => [
          'TRANSACTION REF. NO' => 'MNTA0E22JPRQYPP4HALL',
          '' => '',
          'PAYDIRECT' => '34850',
          'MONETA' => '34850',
          'Bank' => '',
          'Agent name' => '',
        ],
        4 => [
          'TRANSACTION REF. NO' => 'MNTALUMGDVN20RGYJP8N',
          '' => '',
          'PAYDIRECT' => '59400',
          'MONETA' => '59400',
          'Bank' => '',
          'Agent name' => '',
        ],
        5 => [
          'TRANSACTION REF. NO' => 'MNTAUVCGA74MQFMLZ2F6',
          '' => '',
          'PAYDIRECT' => '5300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        6 => [
          'TRANSACTION REF. NO' => 'MNTAECQNVANRTFJKCDEE',
          '' => '',
          'PAYDIRECT' => '105450',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        7 => [
          'TRANSACTION REF. NO' => 'MNTAHN1QGZ7QCS8HEQJE',
          '' => '',
          'PAYDIRECT' => '5725',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        8 => [
          'TRANSACTION REF. NO' => 'MNTA89DW7MP45CZUFY4K',
          '' => '',
          'PAYDIRECT' => '92950',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        9 => [
          'TRANSACTION REF. NO' => 'MNTAECVTXPKH16WMXY4H',
          '' => '',
          'PAYDIRECT' => '129300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        10 => [
          'TRANSACTION REF. NO' => 'MNTACY6RDNUVXDXR6PT5',
          '' => '',
          'PAYDIRECT' => '40000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        11 => [
          'TRANSACTION REF. NO' => 'MNTAFRSP4KVNNDA7XQXF',
          '' => '',
          'PAYDIRECT' => '9505',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        12 => [
          'TRANSACTION REF. NO' => 'MNTANGKLCXXXY7AURJRP',
          '' => '',
          'PAYDIRECT' => '5300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        13 => [
          'TRANSACTION REF. NO' => 'MNTAAZGX2SFKR7ZL4XLP',
          '' => '',
          'PAYDIRECT' => '5300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        14 => [
          'TRANSACTION REF. NO' => 'MNTADMEJVEYEGNN8SPQ3',
          '' => '',
          'PAYDIRECT' => '5000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        15 => [
          'TRANSACTION REF. NO' => 'MNTA0B6DNXY2YQRZYGHT',
          '' => '',
          'PAYDIRECT' => '2700',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        16 => [
          'TRANSACTION REF. NO' => 'MNTASMGWE34E1L4YLCDZ',
          '' => '',
          'PAYDIRECT' => '3425',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        17 => [
          'TRANSACTION REF. NO' => 'MNTAZPJRAQUHEFMS7LFT',
          '' => '',
          'PAYDIRECT' => '3800',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        18 => [
          'TRANSACTION REF. NO' => 'MNTA0A57SVC2AAZBMB4Z',
          '' => '',
          'PAYDIRECT' => '5300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        19 => [
          'TRANSACTION REF. NO' => 'MNTAQATYEJ1XJMSQAA0D',
          '' => '',
          'PAYDIRECT' => '1250',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        20 => [
          'TRANSACTION REF. NO' => 'MNTA2XYV68BL1PPAQPN7',
          '' => '',
          'PAYDIRECT' => '2500',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        21 => [
          'TRANSACTION REF. NO' => 'MNTAHKS0EDENG5Z9M5KJ',
          '' => '',
          'PAYDIRECT' => '3800',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        22 => [
          'TRANSACTION REF. NO' => 'MNTAXQLXCLALXTJTCNDS',
          '' => '',
          'PAYDIRECT' => '2700',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        23 => [
          'TRANSACTION REF. NO' => 'MNTAZFC4HYQBKQQWJWRS',
          '' => '',
          'PAYDIRECT' => '10000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        24 => [
          'TRANSACTION REF. NO' => 'MNTAMERT752JWZ9LPL1W',
          '' => '',
          'PAYDIRECT' => '3800',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        25 => [
          'TRANSACTION REF. NO' => 'MNTAYXDJWWNMFD8QA8NZ',
          '' => '',
          'PAYDIRECT' => '21400',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        26 => [
          'TRANSACTION REF. NO' => 'MNTAKJSMN0KQTP7AN2JT',
          '' => '',
          'PAYDIRECT' => '25500',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        27 => [
          'TRANSACTION REF. NO' => 'MNTA205BEMCLHMGYQFNV',
          '' => '',
          'PAYDIRECT' => '4600',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        28 => [
          'TRANSACTION REF. NO' => 'MNTAR5AG8KUSPNH8EVB6',
          '' => '',
          'PAYDIRECT' => '24500',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        29 => [
          'TRANSACTION REF. NO' => 'MNTAUJNFFPQZMKUZP6KL',
          '' => '',
          'PAYDIRECT' => '5550',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        30 => [
          'TRANSACTION REF. NO' => 'MNTAXHUV5G88XWGHJPJN',
          '' => '',
          'PAYDIRECT' => '46900',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        31 => [
          'TRANSACTION REF. NO' => 'MNTAA58VS7SNGRM1R5ME',
          '' => '',
          'PAYDIRECT' => '3900',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        32 => [
          'TRANSACTION REF. NO' => 'MNTABKYLDXZ3YWKJDV4Q',
          '' => '',
          'PAYDIRECT' => '4900',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        33 => [
          'TRANSACTION REF. NO' => 'MNTARGTSHMHM9CHFQ0DD',
          '' => '',
          'PAYDIRECT' => '4450',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        34 => [
          'TRANSACTION REF. NO' => 'MNTAG23ZGXWWX7ENBGWM',
          '' => '',
          'PAYDIRECT' => '34650',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        35 => [
          'TRANSACTION REF. NO' => 'MNTAY8VA8L7UNEXPSC4Z',
          '' => '',
          'PAYDIRECT' => '7000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        36 => [
          'TRANSACTION REF. NO' => 'MNTAY6BXQ0E6CCJM0UWC',
          '' => '',
          'PAYDIRECT' => '11200',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        37 => [
          'TRANSACTION REF. NO' => 'MNTA7PT34AK0BDDFLRV3',
          '' => '',
          'PAYDIRECT' => '16050',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        38 => [
          'TRANSACTION REF. NO' => 'MNTA8RZBVG5QGJMJKHNJ',
          '' => '',
          'PAYDIRECT' => '17000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        39 => [
          'TRANSACTION REF. NO' => 'MNTAYEQNWFGCHGFNKAL8',
          '' => '',
          'PAYDIRECT' => '2750',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        40 => [
          'TRANSACTION REF. NO' => 'MNTAZGGTC88VKTCEMYLA',
          '' => '',
          'PAYDIRECT' => '11100',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        41 => [
          'TRANSACTION REF. NO' => 'MNTAGJDAXYHQDYP7F74G',
          '' => '',
          'PAYDIRECT' => '7650',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        42 => [
          'TRANSACTION REF. NO' => 'MNTAA7KQNHAQBEK1YY5Q',
          '' => '',
          'PAYDIRECT' => '2950',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        43 => [
          'TRANSACTION REF. NO' => 'MNTAFBCHGQL4XGTS1GEG',
          '' => '',
          'PAYDIRECT' => '3650',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        44 => [
          'TRANSACTION REF. NO' => 'MNTAMEPMPGRN7WF5PQRS',
          '' => '',
          'PAYDIRECT' => '10800',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        45 => [
          'TRANSACTION REF. NO' => 'MNTAHNHHLSWKNJKVVZUU',
          '' => '',
          'PAYDIRECT' => '3600',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        46 => [
          'TRANSACTION REF. NO' => 'MNTANZK40FCRFMHZNK2Q',
          '' => '',
          'PAYDIRECT' => '750',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        47 => [
          'TRANSACTION REF. NO' => 'MNTAD3MP3ZYK7JVN7BNZ',
          '' => '',
          'PAYDIRECT' => '8300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        48 => [
          'TRANSACTION REF. NO' => 'MNTAFGWVFKDGBHQAQLPX',
          '' => '',
          'PAYDIRECT' => '4150',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        49 => [
          'TRANSACTION REF. NO' => 'MNTAXTGGZCWTV0THXNZZ',
          '' => '',
          'PAYDIRECT' => '2300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        50 => [
          'TRANSACTION REF. NO' => 'MNTAJLWLX5HRVW3D3XKC',
          '' => '',
          'PAYDIRECT' => '40000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        51 => [
          'TRANSACTION REF. NO' => 'MNTAYU0MXXSKC75E9BEE',
          '' => '',
          'PAYDIRECT' => '40000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        52 => [
          'TRANSACTION REF. NO' => 'MNTANZL3SA26D5JHVVPX',
          '' => '',
          'PAYDIRECT' => '40000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        53 => [
          'TRANSACTION REF. NO' => 'MNTAFEESXTR9GFCE1KQY',
          '' => '',
          'PAYDIRECT' => '54400',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        54 => [
          'TRANSACTION REF. NO' => 'MNTAJR7JW55WEFSEC1J1',
          '' => '',
          'PAYDIRECT' => '27000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        55 => [
          'TRANSACTION REF. NO' => 'MNTAKCQ6APC9HCUP0QPP',
          '' => '',
          'PAYDIRECT' => '21050',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        56 => [
          'TRANSACTION REF. NO' => 'MNTAETX0BXZVKYPQLCYN',
          '' => '',
          'PAYDIRECT' => '2250',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        57 => [
          'TRANSACTION REF. NO' => 'MNTA9X3HDBED8JBBKG27',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        58 => [
          'TRANSACTION REF. NO' => 'MNTAMQXRF1DATTQUMUHB',
          '' => '',
          'PAYDIRECT' => '69850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        59 => [
          'TRANSACTION REF. NO' => 'MNTA3CTTLE2PXFDQLWZT',
          '' => '',
          'PAYDIRECT' => '3425',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        60 => [
          'TRANSACTION REF. NO' => 'MNTAP2X1LMGW7N40JXBV',
          '' => '',
          'PAYDIRECT' => '3800',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        61 => [
          'TRANSACTION REF. NO' => 'MNTABUBHFY8VL1STYWAY',
          '' => '',
          'PAYDIRECT' => '2300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        62 => [
          'TRANSACTION REF. NO' => 'MNTA6DX9LCVQBLV3U2KV',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        63 => [
          'TRANSACTION REF. NO' => 'MNTACM1ZRCSGF253MYEY',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        64 => [
          'TRANSACTION REF. NO' => 'MNTAPAHFPR7XUDXFBTJB',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        65 => [
          'TRANSACTION REF. NO' => 'MNTATDN910YKMBCEXRXP',
          '' => '',
          'PAYDIRECT' => '6000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        66 => [
          'TRANSACTION REF. NO' => 'MNTAHKMYHGRZDG4UPEX4',
          '' => '',
          'PAYDIRECT' => '12200',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        67 => [
          'TRANSACTION REF. NO' => 'MNTAPM8XAQ5YSUXGHCA7',
          '' => '',
          'PAYDIRECT' => '8000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        68 => [
          'TRANSACTION REF. NO' => 'MNTA0VBFTWQKYFMYZVUW',
          '' => '',
          'PAYDIRECT' => '3200',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        69 => [
          'TRANSACTION REF. NO' => 'MNTA5GDBERPCQMT7Y660',
          '' => '',
          'PAYDIRECT' => '3200',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        70 => [
          'TRANSACTION REF. NO' => 'MNTA377DYYDRGKYNNEXQ',
          '' => '',
          'PAYDIRECT' => '3000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        71 => [
          'TRANSACTION REF. NO' => 'MNTA4P4QUJLYJHQB9W5Y',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        72 => [
          'TRANSACTION REF. NO' => 'MNTASTE0VSFM1FTBV7AC',
          '' => '',
          'PAYDIRECT' => '3300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        73 => [
          'TRANSACTION REF. NO' => 'MNTAANLYXMTXRRB41KR0',
          '' => '',
          'PAYDIRECT' => '3700',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        74 => [
          'TRANSACTION REF. NO' => 'MNTA8GZSQFYQTB2SN2XL',
          '' => '',
          'PAYDIRECT' => '1200',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        75 => [
          'TRANSACTION REF. NO' => 'MNTAAJVXWYBPZHGJJEDB',
          '' => '',
          'PAYDIRECT' => '32450',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        76 => [
          'TRANSACTION REF. NO' => 'MNTAH2CXBTL6BKCGGKLZ',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        77 => [
          'TRANSACTION REF. NO' => 'MNTAAHKZEXVDEXZBYFKF',
          '' => '',
          'PAYDIRECT' => '9100',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        78 => [
          'TRANSACTION REF. NO' => 'MNTAUTCX8HNNYMGSUQF5',
          '' => '',
          'PAYDIRECT' => '3000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        79 => [
          'TRANSACTION REF. NO' => 'MNTAMDAS0B2VFUGU4PCJ',
          '' => '',
          'PAYDIRECT' => '2500',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        80 => [
          'TRANSACTION REF. NO' => 'MNTACTC9QLK56PJDA60X',
          '' => '',
          'PAYDIRECT' => '6500',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        81 => [
          'TRANSACTION REF. NO' => 'MNTAAEDYEKGTPBCVVVGF',
          '' => '',
          'PAYDIRECT' => '700',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        82 => [
          'TRANSACTION REF. NO' => 'MNTANAHF1NNGUUJY2ZQC',
          '' => '',
          'PAYDIRECT' => '7600',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        83 => [
          'TRANSACTION REF. NO' => 'MNTA2YNQGXYJAZSWYWK4',
          '' => '',
          'PAYDIRECT' => '650',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        84 => [
          'TRANSACTION REF. NO' => 'MNTAYW1MZ5TF55TR0YZK',
          '' => '',
          'PAYDIRECT' => '6650',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        85 => [
          'TRANSACTION REF. NO' => 'MNTARKLYJQJXHL6JFT3S',
          '' => '',
          'PAYDIRECT' => '3050',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        86 => [
          'TRANSACTION REF. NO' => 'MNTA1MX7RX42WP19NDC8',
          '' => '',
          'PAYDIRECT' => '14650',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        87 => [
          'TRANSACTION REF. NO' => 'MNTAN3HSCM23MQTA0BR3',
          '' => '',
          'PAYDIRECT' => '11050',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        88 => [
          'TRANSACTION REF. NO' => 'MNTAUYN0K1Q5XZAUCGUX',
          '' => '',
          'PAYDIRECT' => '10200',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        89 => [
          'TRANSACTION REF. NO' => 'MNTAQE9Q7FHU5DD533MF',
          '' => '',
          'PAYDIRECT' => '10350',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        90 => [
          'TRANSACTION REF. NO' => 'MNTAPT98XKF0JZGXVGU8',
          '' => '',
          'PAYDIRECT' => '3300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        91 => [
          'TRANSACTION REF. NO' => 'MNTAKZBXN6SLUAUVHPQH',
          '' => '',
          'PAYDIRECT' => '900',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        92 => [
          'TRANSACTION REF. NO' => 'MNTAJZG0KMYAWHQ3GWGX',
          '' => '',
          'PAYDIRECT' => '5200',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        93 => [
          'TRANSACTION REF. NO' => 'MNTAJKURRMY0PJDFENVF',
          '' => '',
          'PAYDIRECT' => '1300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        94 => [
          'TRANSACTION REF. NO' => 'MNTA2A2K7M5BVJTW81PZ',
          '' => '',
          'PAYDIRECT' => '1600',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        95 => [
          'TRANSACTION REF. NO' => 'MNTAKRAMJXNUYD66MDT4',
          '' => '',
          'PAYDIRECT' => '3050',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        96 => [
          'TRANSACTION REF. NO' => 'MNTAE8SNVKYM8YJBNEKC',
          '' => '',
          'PAYDIRECT' => '1100',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        97 => [
          'TRANSACTION REF. NO' => 'MNTA6XVPSGBF3TWFR4VJ',
          '' => '',
          'PAYDIRECT' => '1400',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        98 => [
          'TRANSACTION REF. NO' => 'MNTAULGZVHGUN7V2E42D',
          '' => '',
          'PAYDIRECT' => '2650',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        99 => [
          'TRANSACTION REF. NO' => 'MNTAPSCUDFFTQ5VLLY7A',
          '' => '',
          'PAYDIRECT' => '90000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        100 => [
          'TRANSACTION REF. NO' => 'MNTAYB4CJFAP9DZH5HMM',
          '' => '',
          'PAYDIRECT' => '15950',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        101 => [
          'TRANSACTION REF. NO' => 'MNTAJBAEQBJLE3HTBVH2',
          '' => '',
          'PAYDIRECT' => '2500',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        102 => [
          'TRANSACTION REF. NO' => 'MNTAYKMVHEDNTKRJQFFK',
          '' => '',
          'PAYDIRECT' => '2300',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        103 => [
          'TRANSACTION REF. NO' => 'MNTA5RHMNZP2QNET4J5A',
          '' => '',
          'PAYDIRECT' => '40000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        104 => [
          'TRANSACTION REF. NO' => 'MNTADXRG50YLLBSYDFQW',
          '' => '',
          'PAYDIRECT' => '32000',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        105 => [
          'TRANSACTION REF. NO' => 'MNTAL4FN285BCH4T7KRS',
          '' => '',
          'PAYDIRECT' => '94750',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        106 => [
          'TRANSACTION REF. NO' => 'MNTAPUHNBNPZ6PGLZEXF',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        107 => [
          'TRANSACTION REF. NO' => 'MNTAYB3R6TNKLAPMJ2NJ',
          '' => '',
          'PAYDIRECT' => '6200',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        108 => [
          'TRANSACTION REF. NO' => 'MNTAMRHDSQZLWJK5BRQD',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        109 => [
          'TRANSACTION REF. NO' => 'MNTAMNZFF8HCFKVM7VYU',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        110 => [
          'TRANSACTION REF. NO' => 'MNTAZAUDR98RP7LUHNHY',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        111 => [
          'TRANSACTION REF. NO' => 'MNTAN7W5L9KR2C97W97X',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        112 => [
          'TRANSACTION REF. NO' => 'MNTAT2NUSGMEWMTWHGDF',
          '' => '',
          'PAYDIRECT' => '196900',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        113 => [
          'TRANSACTION REF. NO' => 'MNTAHXPXQLKJ5LVJMVPG',
          '' => '',
          'PAYDIRECT' => '850',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        114 => [
          'TRANSACTION REF. NO' => 'MNTABECMZGERZAXPFUJK',
          '' => '',
          'PAYDIRECT' => '91250',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        115 => [
          'TRANSACTION REF. NO' => 'MNTARAWP5WKFSCDPVX3P',
          '' => '',
          'PAYDIRECT' => '30150',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
        116 => [
          'TRANSACTION REF. NO' => 'MNTAA27GDGGYDQ5CSEMX',
          '' => '',
          'PAYDIRECT' => '24500',
          'MONETA' => '',
          'Bank' => '',
          'Agent name' => '',
        ],
    ];

    foreach($transactions as $k => $transaction){
        $curl = curl_init();

            $res= false;
            $reference= $transaction['TRANSACTION REF. NO'];
            $type='bank';
            $string = $reference.$type;  //concatenate these values
            $mac = env('MAC_KEY');
            $hash = hash_hmac('sha512',$string,$mac, false);
          $token = env('MONETA_TOKEN');


            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://app.moneta.ng/api/v1/transaction/verify/bank/".$reference."?hash=".$hash,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                       "Authorization: Bearer 140|0wNzun6hHwJVfbcyg7XRxElc00FlHJAP8iCuvVvc",
   						 "Accept: application/json"
                ),
            ));

            $response = curl_exec($curl);
            
            $err = curl_error($curl);
            curl_close($curl);
            $result = json_decode($response, true);
            //  return $result['customer']['AmountDue'];
             $transactions[$k]['name'] = $result['customer']['FirstName'].' '. $result['customer']['LastName'] ?? 'name';
            
            // $transactions[$k]['Agent name'] = $result["customer"]["FirstName"].' '. $result["customer"]["LastName"] ?? "name";
            // return $transaction['Agent name'];
            $transactions[$k]['MONETA'] = $result['customer']['AmountDue'] ?? 'amount';
            // $transactions[$k]['moneta_amount'] = $result['customer']['AmountDue'] ?? "amount";


    }
    return Excel::download(new excelExport($transactions),'transactions.xlsx');
   }

  public function createMda(){
    $arrays = array (
      0 => 
      array (
        0 => 'Category Code',
        1 => 'Category Name',
        2 => 'Revenue Code',
        3 => 'Revenue Name',
      ),
      1 => 
      array (
        0 => '12081001',
        1 => 'Ministry Of Youths And Social Development',
        2 => '16001001-12081001',
        3 => 'Other Fees',
      ),
      2 => 
      array (
        0 => '12081001',
        1 => 'Ministry Of Youths And Social Development',
        2 => '16001001-12081002',
        3 => 'Proceeds Fees',
      ),
      3 => 
      array (
        0 => '12081001',
        1 => 'Ministry Of Youths And Social Development',
        2 => '16001001-12081003',
        3 => 'Proceeds From Sales, Youth Week Emblem',
      ),
      4 => 
      array (
        0 => '12081001',
        1 => 'Ministry Of Youths And Social Development',
        2 => '16001001-12081004',
        3 => 'Reg. Of Youth Organisations',
      ),
      5 => 
      array (
        0 => '12081001',
        1 => 'Ministry Of Youths And Social Development',
        2 => '16001001-12081005',
        3 => 'Registration Of Youth Organizations',
      ),
      6 => 
      array (
        0 => '12081001',
        1 => 'Ministry Of Youths And Social Development',
        2 => '16001001-12081006',
        3 => 'Renewal Of Reg. Of Youth Organizations',
      ),
      7 => 
      array (
        0 => '12081001',
        1 => 'Ministry Of Youths And Social Development',
        2 => '16001001-12081007',
        3 => 'Sale Of Old Newspapers',
      ),
      8 => 
      array (
        0 => '12081001',
        1 => 'Ministry Of Youths And Social Development',
        2 => '16001001-12081008',
        3 => 'Sale Of Youth Organization Emblem',
      ),
      9 => 
      array (
        0 => '12081001',
        1 => 'Ministry Of Youths And Social Development',
        2 => '16001001-12081009',
        3 => 'Tender Fees',
      ),
      10 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301139 ',
        3 => 'Enumeration, Revalidation And Recertification',
      ),
      11 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301001',
        3 => 'Basic Education Certificates Exam',
      ),
      12 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301002',
        3 => 'Seminar W/Shops For Profession Of Nursery Schools',
      ),
      13 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301003',
        3 => '10% Wht On Consultants',
      ),
      14 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301004',
        3 => '5% Wht On Contracts',
      ),
      15 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301005',
        3 => 'Appl. Fees For Estab. Of New Prof. Inst.',
      ),
      16 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301006',
        3 => 'Appl. Fees For Estab. Of Nursery Schools',
      ),
      17 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301007',
        3 => 'Appl. Fees For Estab. Of Prim. Schools',
      ),
      18 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301008',
        3 => 'Appl. Fees For Estab. Of Sec. Schools',
      ),
      19 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301009',
        3 => 'Application Fee (Registration)',
      ),
      20 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301010',
        3 => 'Application Fee (Renewal)',
      ),
      21 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301011',
        3 => 'Application FeesEstablishment Of Private Vocational Schools',
      ),
      22 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301012',
        3 => 'Application FeesEstablishment Of Nursery Schools',
      ),
      23 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301013',
        3 => 'Application Fees For Establishment Of New Prof. Institution',
      ),
      24 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301014',
        3 => 'Application For The Establishment Of New Private Sec School',
      ),
      25 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301015',
        3 => 'Application For The Establishment Of Private Primary School',
      ),
      26 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301016',
        3 => 'Application Form',
      ),
      27 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301017',
        3 => 'Approval FeeAddition Of Pry Six',
      ),
      28 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301018',
        3 => 'Approval Fee (Registration)',
      ),
      29 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301019',
        3 => 'Approval Fee (Renewal)',
      ),
      30 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301020',
        3 => 'Approval FeeAddition Of Pry Six',
      ),
      31 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301021',
        3 => 'Approval Inspection Of Grading Of Sec. Sch. Status',
      ),
      32 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301022',
        3 => 'AudioVisual AidsSale Of Products',
      ),
      33 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301023',
        3 => 'Change Of School Name',
      ),
      34 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301024',
        3 => 'Change Of SchoolIntra State Transfer',
      ),
      35 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301025',
        3 => 'Common Entrance Exam Fees',
      ),
      36 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301026',
        3 => 'Confirmation Of Lost PostWar Certificate',
      ),
      37 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301027',
        3 => 'Contract Worth 2million And 5million (Registration)',
      ),
      38 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301028',
        3 => 'Contract Worth 2million And 5million (Renewal)',
      ),
      39 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301029',
        3 => 'Contract Worth 2million And Below (Registration)',
      ),
      40 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301030',
        3 => 'Contract Worth 2million And Below (Renewal)',
      ),
      41 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301031',
        3 => 'Contract Worth 5million And 10million (Registration)',
      ),
      42 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301032',
        3 => 'Contract Worth 5million And 10million (Renewal)',
      ),
      43 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301033',
        3 => 'Exam Approval Insp. Fees For Private Schools',
      ),
      44 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301034',
        3 => 'Federal Craft Cert. Exam Fees',
      ),
      45 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301035',
        3 => 'Fslc/Cont. Assess Processing Fees',
      ),
      46 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301036',
        3 => 'Gifted Children Screening',
      ),
      47 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301037',
        3 => 'Hire Of Conference Room',
      ),
      48 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301038',
        3 => 'Inspection Fee (Registration)',
      ),
      49 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301039',
        3 => 'Inspection Fee (Renewal)',
      ),
      50 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301040',
        3 => 'Inspection FeesPrivate Nursery Schools',
      ),
      51 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301041',
        3 => 'Inspection FeesPrivate Primary Schools',
      ),
      52 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301042',
        3 => 'Inspection FeesPrivate Professional Institutes.',
      ),
      53 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301043',
        3 => 'Inspection FeesPrivate Vocational Schools',
      ),
      54 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301044',
        3 => 'Inspection FeesPrivate Secondary Schools',
      ),
      55 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301045',
        3 => 'Inter State Transfer',
      ),
      56 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301046',
        3 => 'Issue Of Post War Piecemeal Tc2 Cert',
      ),
      57 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301047',
        3 => 'Jnr. Voc. Sch. Cert. Resit Exam',
      ),
      58 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301048',
        3 => 'Junior School Certificate Exam Fees',
      ),
      59 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301049',
        3 => 'Junior Schools Cert. Exam Fees',
      ),
      60 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301050',
        3 => 'Other Fees',
      ),
      61 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301051',
        3 => 'Processing Fee (Registration)',
      ),
      62 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301052',
        3 => 'Processing Fee (Renewal)',
      ),
      63 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301053',
        3 => 'Processing Fee For Cert Evaluation',
      ),
      64 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301054',
        3 => 'Processing Fee For Cert. Evaluation O LevelA Level',
      ),
      65 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301055',
        3 => 'Public Health Entrance Examination Fees',
      ),
      66 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301056',
        3 => 'Reg. Of Nursery Schools Operational License',
      ),
      67 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301057',
        3 => 'Reg. Of Private Primary Schools Operational License',
      ),
      68 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301058',
        3 => 'Reg. Of Private Professional Institute Operational License',
      ),
      69 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301059',
        3 => 'Reg. Of Private Secondaryschools Operational License',
      ),
      70 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301060',
        3 => 'Reg. RenewalPrivate Primary Schools Operational License',
      ),
      71 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301061',
        3 => 'Reg. RenewalPrivate Prof. Institute Operational License',
      ),
      72 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301062',
        3 => 'Reg. RenewalPrivate Secondary Schools Operational License',
      ),
      73 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301063',
        3 => 'Reg./Renewal For Operational License',
      ),
      74 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301064',
        3 => 'Reg./Renewal For Operational License',
      ),
      75 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301065',
        3 => 'Registration Of Creche',
      ),
      76 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301066',
        3 => 'Registration Of Day Centres',
      ),
      77 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301067',
        3 => 'Registration Of New Nursery Schools',
      ),
      78 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301068',
        3 => 'Registration Of New Primary Schools',
      ),
      79 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301069',
        3 => 'Registration Of New Private Secondary Schools',
      ),
      80 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301070',
        3 => 'Registration Of Private Prof. Institute',
      ),
      81 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301071',
        3 => 'Registration Of Private Vocational Schools',
      ),
      82 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301072',
        3 => 'Registration Of Private Vocational Schools Operational License',
      ),
      83 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301073',
        3 => 'RenewalPrivate Nursery Schools Operational License',
      ),
      84 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301074',
        3 => 'Renewal Of Creche',
      ),
      85 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301075',
        3 => 'Renewal Of Day Care Center',
      ),
      86 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301076',
        3 => 'Renewal Of Nursery School',
      ),
      87 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301077',
        3 => 'Renewal Of Primary School',
      ),
      88 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301078',
        3 => 'Renewal Of Prof. Institution',
      ),
      89 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301079',
        3 => 'Renewal Of Secondary School',
      ),
      90 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301080',
        3 => 'Renewal Of Secondary School',
      ),
      91 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301081',
        3 => 'Renewal Of Private Vocational Schools Operational License',
      ),
      92 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301082',
        3 => 'Royalties On School Textbooks',
      ),
      93 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301083',
        3 => 'Sale Of Application Forms Into Cont. Education Center',
      ),
      94 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301084',
        3 => 'Sale Of Old Newspapers',
      ),
      95 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301085',
        3 => 'Sale Of Publications',
      ),
      96 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301086',
        3 => 'Sale Of Soup, Snacks, Books & Craft',
      ),
      97 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301087',
        3 => 'School FeeSnr. Secondary School',
      ),
      98 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301088',
        3 => 'Seminar W/Shops For Private Vocational Schools',
      ),
      99 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301089',
        3 => 'Seminar W/Shops For Prof. Of Nursery Schools',
      ),
      100 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301090',
        3 => 'Subject Approval Jsce',
      ),
      101 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301091',
        3 => 'Subject/Exam Approval Inspection Fee',
      ),
      102 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301092',
        3 => 'Teacher Grade I Certificate Exam Fees',
      ),
      103 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301093',
        3 => 'Teacher Grade Ii Certificate Exam Fees',
      ),
      104 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301094',
        3 => 'Tender Fee (Renewal)',
      ),
      105 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301095',
        3 => 'Tender Fees',
      ),
      106 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301096',
        3 => 'Universal Basic EducationAssesment Test',
      ),
      107 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301097',
        3 => 'Upgrading Primary Schools',
      ),
      108 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301098',
        3 => 'Women Education Skills Acquisition',
      ),
      109 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301099',
        3 => 'Reg. RenewalPrivate Nursery Schools Operational License',
      ),
      110 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301100',
        3 => 'Upgrading To Secondary School Inspection Fee',
      ),
      111 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301101',
        3 => 'Tuition',
      ),
      112 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301102',
        3 => 'Consolidated Equipment',
      ),
      113 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301103',
        3 => 'Board Retention',
      ),
      114 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301104',
        3 => 'Pta Welfare',
      ),
      115 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301105',
        3 => 'Security And Centrally Set Paper',
      ),
      116 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301106',
        3 => 'Computer Fees',
      ),
      117 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301107',
        3 => 'Maps And Charts',
      ),
      118 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301108',
        3 => 'Carnivals And Guiness Book',
      ),
      119 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301109',
        3 => 'Sports',
      ),
      120 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301110',
        3 => 'Safe Production',
      ),
      121 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301111',
        3 => 'School Retention',
      ),
      122 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301112',
        3 => 'Exam Scripts',
      ),
      123 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301113',
        3 => 'Set Of Books (R&R)',
      ),
      124 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301114',
        3 => 'Gen Sets Production',
      ),
      125 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301115',
        3 => 'Dossier',
      ),
      126 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301116',
        3 => 'O\' Level & Diploma Degree',
      ),
      127 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301117',
        3 => 'Women Education Skills AcquisitionApplication Form',
      ),
      128 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301118',
        3 => 'Women Education Skills AcquisitionSchool Fee',
      ),
      129 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301119',
        3 => 'Women Education Skills AcquisitionBoarding Fee',
      ),
      130 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301120',
        3 => 'Approval Fee For Professional Institute',
      ),
      131 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301121',
        3 => 'Application Fee For Establishment Of Computer Training (Appreciation Course)',
      ),
      132 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301122',
        3 => 'Registration Of Computer Training (Appreciation ) Institute',
      ),
      133 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301123',
        3 => 'Approval Fee For Computer Training (Appreciation ) Institute',
      ),
      134 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301124',
        3 => 'Renewal Fee For Computer Training (Appreciation ) Institute',
      ),
      135 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301125',
        3 => 'ReInspection For Nursery Schools',
      ),
      136 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301126',
        3 => 'Handling Charges',
      ),
      137 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301127',
        3 => 'ReInspection For Primary Schools',
      ),
      138 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301128',
        3 => 'ReInspection For Secondary Schools',
      ),
      139 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301129',
        3 => 'ReInspection For Private Vocational Schools',
      ),
      140 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301130',
        3 => 'Identification Of Contracts With The Ministry',
      ),
      141 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301131',
        3 => 'Confirmation Of Lost Post War Certificate',
      ),
      142 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301132',
        3 => 'Universal Basic Education Assessment Test (Ubeat)',
      ),
      143 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301133',
        3 => 'Junior School Business/Technical Certificate Examination (Js (B/T) Ce)',
      ),
      144 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301134',
        3 => 'Quality Assurance MonitoringUniversal Basic Education General Placement Tes',
      ),
      145 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301135',
        3 => 'Quality Assurance MonitoringUniversal Basic Education Test Into Model Schoo',
      ),
      146 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301136',
        3 => 'Quality Assurance MonitoringCommon Entrance Examination In Science Schools ',
      ),
      147 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301137',
        3 => 'Tender FeeContracts Above N10m',
      ),
      148 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301138',
        3 => 'Book Review',
      ),
      149 => 
      array (
        0 => '19001001',
        1 => 'Ministry Of Education',
        2 => '19001001-12301139',
        3 => 'Recertification Of Private Schools',
      ),
      150 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401001',
        3 => 'Application Form For Consultants/Contractor',
      ),
      151 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401002',
        3 => 'Building Inspection Of Health Institution',
      ),
      152 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401003',
        3 => 'Burrow Pits/Sand Mining Sites',
      ),
      153 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401004',
        3 => 'Certification Of Small Sea Food Ind./Enterprises',
      ),
      154 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401005',
        3 => 'Consultancy Fees',
      ),
      155 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401006',
        3 => 'Environment Audit (Ea)',
      ),
      156 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401007',
        3 => 'Environment Impact Assessment Fee',
      ),
      157 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401008',
        3 => 'Industrial Waste Discharge Permit',
      ),
      158 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401009',
        3 => 'Inspection Of Food Handling Environment',
      ),
      159 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401010',
        3 => 'Laboratory Service Fees',
      ),
      160 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401011',
        3 => 'Motor Emblem Pollution Discharge',
      ),
      161 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401012',
        3 => 'Othrs',
      ),
      162 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401013',
        3 => 'Payments For Permit And Review',
      ),
      163 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401014',
        3 => 'Pollution Fees',
      ),
      164 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401015',
        3 => 'Pollution/Effluent Discharge Fees',
      ),
      165 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401016',
        3 => 'Registration Of Pest Control And Fumigation Services Provide',
      ),
      166 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401017',
        3 => 'Renewal Of Consultants',
      ),
      167 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401018',
        3 => 'Renewal Of Industrial Waste Discharge Permit',
      ),
      168 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401019',
        3 => 'Vetting Of Health Institutions Building Plans To Avoid',
      ),
      169 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401020',
        3 => 'Petrol Stations',
      ),
      170 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401021',
        3 => 'Habitation',
      ),
      171 => 
      array (
        0 => '30001001',
        1 => 'Ministry Of Environment',
        2 => '30001001-13401022',
        3 => 'Audit/Emp',
      ),
      172 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401001',
        3 => '10% Wht From Fed. Inland Rev.',
      ),
      173 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401002',
        3 => '10% Wht On Consultants',
      ),
      174 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401003',
        3 => '13% Deprivation Fund',
      ),
      175 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401004',
        3 => '5% Wht On Contracts',
      ),
      176 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401005',
        3 => 'Afribank Plc',
      ),
      177 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401006',
        3 => 'Alex Industry Plc',
      ),
      178 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401007',
        3 => 'Anambra Motor Manufacturing Company (Avam)',
      ),
      179 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401008',
        3 => 'Anamco',
      ),
      180 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401009',
        3 => 'Arrears Of Statutory Allocation For Ecological Problems',
      ),
      181 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401010',
        3 => 'Auac',
      ),
      182 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401011',
        3 => 'Cadbury Plc',
      ),
      183 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401012',
        3 => 'Capital Hotel Plc',
      ),
      184 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401013',
        3 => 'Directorship Fees Paid To Public Offices',
      ),
      185 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401014',
        3 => 'Div. Received From Govt. Investments.',
      ),
      186 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401015',
        3 => 'Dividend Recorved From Govt',
      ),
      187 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401016',
        3 => 'Due Dilgence Fee',
      ),
      188 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401017',
        3 => 'Ecological Fund',
      ),
      189 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401018',
        3 => 'Emenite Limited',
      ),
      190 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401019',
        3 => 'Evans Medical Ltd',
      ),
      191 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401020',
        3 => 'Excess Crude Fund',
      ),
      192 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401021',
        3 => 'First Aluminium Co (Nig) Limited',
      ),
      193 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401022',
        3 => 'First Aluminium Product Ltd',
      ),
      194 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401023',
        3 => 'General Cotton Mills Ltd',
      ),
      195 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401024',
        3 => 'Guiness Nigeria Plc',
      ),
      196 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401025',
        3 => 'Hire Of Computer Time',
      ),
      197 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401026',
        3 => 'Hire Of Conference RoomTraining Hall',
      ),
      198 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401027',
        3 => 'Hire Of Government Vehicles',
      ),
      199 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401028',
        3 => 'Imo Concorde Hotel',
      ),
      200 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401029',
        3 => 'Imo Marketing Company Ltd',
      ),
      201 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401030',
        3 => 'Imo Municipal Transport',
      ),
      202 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401031',
        3 => 'Imo Regional Cattle Market',
      ),
      203 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401032',
        3 => 'Imo Rubber Estate Co. Ltd',
      ),
      204 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401033',
        3 => 'Imo Transport Company (Itc)',
      ),
      205 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401034',
        3 => 'Intercontinental Bank Plc',
      ),
      206 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401035',
        3 => 'Money Lender Licenses',
      ),
      207 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401036',
        3 => 'Nalmerchant Bank Plc',
      ),
      208 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401037',
        3 => 'Nddc Refund',
      ),
      209 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401038',
        3 => 'Nestle Foods Nigeria Plc',
      ),
      210 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401039',
        3 => 'Nigeria Breweries Plc',
      ),
      211 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401040',
        3 => 'Oando Nigeria Plc',
      ),
      212 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401041',
        3 => 'Other Fees',
      ),
      213 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401042',
        3 => 'Reimbursement From Agro Nova',
      ),
      214 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401043',
        3 => 'Reimbursement From Education Rate Fund Acct',
      ),
      215 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401044',
        3 => 'Reimbursement From Nddc',
      ),
      216 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401045',
        3 => 'Reinbursement From Education Rate Fund Acct.',
      ),
      217 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401046',
        3 => 'Rural Electrification Refund',
      ),
      218 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401047',
        3 => 'Sale Of Old Newspapers',
      ),
      219 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401048',
        3 => 'Sale Of Statistical Publications',
      ),
      220 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401049',
        3 => 'Standard Trust Bank Plc',
      ),
      221 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401050',
        3 => 'Statutory Allocation For Ecological Problems',
      ),
      222 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401051',
        3 => 'Stautory Allocation From Federations',
      ),
      223 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401052',
        3 => 'Tender Fees',
      ),
      224 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401053',
        3 => 'Transfer Of Bond Interest',
      ),
      225 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401054',
        3 => 'Trust Securities',
      ),
      226 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401055',
        3 => 'Unclassified',
      ),
      227 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401056',
        3 => 'Union Bank Plc',
      ),
      228 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401057',
        3 => 'United Africa Company (Uac)',
      ),
      229 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401058',
        3 => 'UnUtilized Bonds',
      ),
      230 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401059',
        3 => 'Value Added Tax (Vat)',
      ),
      231 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401060',
        3 => 'West Minister Dredging (Nig) Ltd',
      ),
      232 => 
      array (
        0 => '20001001',
        1 => 'Ministry Of Finance',
        2 => '20001001-12401061',
        3 => 'Zenith Bank Plc',
      ),
      233 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501001',
        3 => 'Registration Of New Health Institutions',
      ),
      234 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501002',
        3 => 'Acceptance FeesSchool Of Nursing',
      ),
      235 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501003',
        3 => 'Accommodation Fees School Of Health Technology',
      ),
      236 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501004',
        3 => 'Application Fees For Post Basic Midwifery Courses',
      ),
      237 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501005',
        3 => 'Cont. Lic',
      ),
      238 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501006',
        3 => 'Continuing Education For Nurses',
      ),
      239 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501007',
        3 => 'Deductions From Lga And Isopadec',
      ),
      240 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501008',
        3 => 'Fees For Application Forms For Estab. Of Health Institutes',
      ),
      241 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501009',
        3 => 'Fees For Inoculations',
      ),
      242 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501010',
        3 => 'Fees For International Inoculations (Yellow Card)',
      ),
      243 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501011',
        3 => 'Food Vendors Licences',
      ),
      244 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501012',
        3 => 'Forms For Renewal Of Patent & Proprietry Med. & Venors Licen ',
      ),
      245 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501013',
        3 => 'Fumigation Of Homes & Premises',
      ),
      246 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501014',
        3 => 'Hire Of Govt. Vehicles (Ambulance)',
      ),
      247 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501015',
        3 => 'Hostel Fees For Accom Of Trainee Nurses',
      ),
      248 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501016',
        3 => 'Inspection Fees For Reg.Of New Health Institutions',
      ),
      249 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501017',
        3 => 'Nursery/Midwifery Entrance Exam Fees',
      ),
      250 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501018',
        3 => 'Other Fees',
      ),
      251 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501019',
        3 => 'Patent & Proprietary Vendor Licences',
      ),
      252 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501020',
        3 => 'Pest/Vendor Control Services Licences',
      ),
      253 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501021',
        3 => 'Public Health Entrance Exam Fess',
      ),
      254 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501022',
        3 => 'Public Health Lab. Fees',
      ),
      255 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501023',
        3 => 'Reg. Of Traditional Medicine Clinics',
      ),
      256 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501024',
        3 => 'Reg. Of Vector Control Services',
      ),
      257 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501025',
        3 => 'Reg./Renewal For Operational License',
      ),
      258 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501026',
        3 => 'Registration Fees (For Use Of Library)',
      ),
      259 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501027',
        3 => 'Registration Of New Health Institutions',
      ),
      260 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501028',
        3 => 'Registration Of Trado Medical',
      ),
      261 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501029',
        3 => 'Renewal Of Health Institutions',
      ),
      262 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501030',
        3 => 'Renewal Of Patent & Proprietary Vendor Licences',
      ),
      263 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501031',
        3 => 'Renewal Of Vectors Control Services',
      ),
      264 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501032',
        3 => 'Sale Of Appl. Forms Pest/Vector Cont. Lic.',
      ),
      265 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501033',
        3 => 'Sale Of Application Forms For Patent & Proprietaty License',
      ),
      266 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501034',
        3 => 'Sale Of Old Newspapers',
      ),
      267 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501035',
        3 => 'School FeesSchool Of Health Technology',
      ),
      268 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501036',
        3 => 'School FeesSchool Of Nursing',
      ),
      269 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501037',
        3 => 'School FeesSchool Of Public Health Nursing',
      ),
      270 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501038',
        3 => 'State Health',
      ),
      271 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501039',
        3 => 'Tender Fees',
      ),
      272 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501040',
        3 => 'Tuition Fees School Of Midwifery Course',
      ),
      273 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501041',
        3 => 'Hospital Approval Fee',
      ),
      274 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501042',
        3 => '5% Witholding Tax On Contracts',
      ),
      275 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501043',
        3 => '10% Tax On Consultancy',
      ),
      276 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501044',
        3 => 'Renewal Of Food Vendor Licenses',
      ),
      277 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501045',
        3 => 'Acceptance Fee School Of Post Basic Midwifery Awoomamma',
      ),
      278 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501046',
        3 => 'Accommodation Fees School Of Post Basic Midwifery Awoomamma',
      ),
      279 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501047',
        3 => 'Interview',
      ),
      280 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501048',
        3 => 'Approval Fees For Building Plans',
      ),
      281 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501049',
        3 => 'Renewal Of Trado Medical License',
      ),
      282 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501050',
        3 => 'Fees For Location Approval For Pattent And Proprietary Medicine Shops',
      ),
      283 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501051',
        3 => 'Inspection Fee On New Pharmacies Embarkiing On Distribution/Importation',
      ),
      284 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501052',
        3 => 'Inspection Fee On New Pharmacies Embarkiing On Retail Services',
      ),
      285 => 
      array (
        0 => '21001001',
        1 => 'Ministry Of Health',
        2 => '21001001-12501053',
        3 => 'Food Inspection',
      ),
      286 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301001',
        3 => 'Printing Of Building Plan',
      ),
      287 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301002',
        3 => 'Rent On Govt Quarters Outside Imo State',
      ),
      288 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301003',
        3 => 'Rent On Junior Staff Quarters',
      ),
      289 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301004',
        3 => 'Rent On Parliament Quarters For Legislature',
      ),
      290 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301005',
        3 => 'Rent On Senior Staff Quarters',
      ),
      291 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301006',
        3 => 'Nekede Exclusive Garden Development Profit',
      ),
      292 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301007',
        3 => 'Sale Of Housing Estate Okporo',
      ),
      293 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301008',
        3 => 'Street Light Ole Advert Fees',
      ),
      294 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301009',
        3 => 'Tender Fees',
      ),
      295 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301010',
        3 => 'Registration Of Developers',
      ),
      296 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301011',
        3 => 'Application Fee To Be A Developer',
      ),
      297 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301012',
        3 => 'Search Fee On Plots',
      ),
      298 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301013',
        3 => 'Fees For Affiliation Of Contractors',
      ),
      299 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301014',
        3 => 'Plans Adoption Fee',
      ),
      300 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301015',
        3 => 'New Estate Agbala Housing Of Estate',
      ),
      301 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301016',
        3 => 'Fencing Fee',
      ),
      302 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301017',
        3 => 'Application Fee For Laying Of Pipes Across The Road',
      ),
      303 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301018',
        3 => 'Approval Of Renovation',
      ),
      304 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301019',
        3 => 'Crossing Pipes With Approval',
      ),
      305 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301020',
        3 => 'House Numbering Fees',
      ),
      306 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301021',
        3 => '10% Wht On Consultants',
      ),
      307 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301022',
        3 => '5% Wht On Contractors',
      ),
      308 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301023',
        3 => 'Current Rent Nekede Exclusive Garden',
      ),
      309 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301024',
        3 => 'Arrears Of Rent',
      ),
      310 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301025',
        3 => 'Nekede Exclusive Garden Lease/Land Value',
      ),
      311 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301026',
        3 => 'Rent Of Community Centre',
      ),
      312 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301027',
        3 => 'Change Of Purpose',
      ),
      313 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301028',
        3 => 'Profit Development Copy (Pdc)',
      ),
      314 => 
      array (
        0 => '50001001',
        1 => 'Ministry Of Housing',
        2 => '50001001-15301029',
        3 => 'Certified True Copy (Ctc)',
      ),
      315 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601001',
        3 => '10% Wht On Consultants',
      ),
      316 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601002',
        3 => '5% Wht On Contracts',
      ),
      317 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601003',
        3 => 'Bindind & Rehabilitation Of Books',
      ),
      318 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601004',
        3 => 'Binding Of Printing Materials',
      ),
      319 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601005',
        3 => 'Earning From Imo Newspapers',
      ),
      320 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601006',
        3 => 'Earnings From Plan Printing Machines',
      ),
      321 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601007',
        3 => 'F.O.E Trainee Fees',
      ),
      322 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601008',
        3 => 'Graphic Arts Designs',
      ),
      323 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601009',
        3 => 'Hire Of Films',
      ),
      324 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601010',
        3 => 'Hire Of Public Address System',
      ),
      325 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601011',
        3 => 'Mobile Video Licences',
      ),
      326 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601012',
        3 => 'N.D.E Trainee Fees',
      ),
      327 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601013',
        3 => 'Newspaper Licenses',
      ),
      328 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601014',
        3 => 'Newspaper Vendors Licences',
      ),
      329 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601015',
        3 => 'Office Equipment Repairs',
      ),
      330 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601016',
        3 => 'Other Fees',
      ),
      331 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601017',
        3 => 'Outdoor Advert Fees',
      ),
      332 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601018',
        3 => 'Printing Earnings',
      ),
      333 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601019',
        3 => 'Proceeds From Workshop Products',
      ),
      334 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601020',
        3 => 'Reg. & Renewal Of Social Clubs & Organisations',
      ),
      335 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601021',
        3 => 'Reg. & Renewal Of Stationery Supplies',
      ),
      336 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601022',
        3 => 'Reg. & Renewal Of Supply Of Print Material',
      ),
      337 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601023',
        3 => 'Reg. And Renewal Social Clubs',
      ),
      338 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601024',
        3 => 'Reg. Of Culcural Groups',
      ),
      339 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601025',
        3 => 'Registration Of Newspaper Agents',
      ),
      340 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601026',
        3 => 'Registration Of Private Printers',
      ),
      341 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601027',
        3 => 'Renewal Of Culcural Groups',
      ),
      342 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601028',
        3 => 'Renewal Of Newspaper Vendors Services',
      ),
      343 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601029',
        3 => 'Renewal Reg. Of Newspaper Agents',
      ),
      344 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601030',
        3 => 'Sale Of Diaries & Calendars',
      ),
      345 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601031',
        3 => 'Sale Of Empty Plastic Container & Scraps',
      ),
      346 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601032',
        3 => 'Sale Of Old Newpapers',
      ),
      347 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601033',
        3 => 'Sale Of Photographs',
      ),
      348 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601034',
        3 => 'Sale Of Publication',
      ),
      349 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601035',
        3 => 'Sale Of Youth Magazines',
      ),
      350 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601036',
        3 => 'Searchers Fees',
      ),
      351 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601037',
        3 => 'Signage/Advert Fees',
      ),
      352 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601038',
        3 => 'Stationery Trading Account',
      ),
      353 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601039',
        3 => 'Tender Fees',
      ),
      354 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601040',
        3 => 'Video Recording Duplications',
      ),
      355 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601041',
        3 => 'Video Coverage',
      ),
      356 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601042',
        3 => 'Spotlight On Communities',
      ),
      357 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601043',
        3 => 'Private Radio/T.V Operational Fees',
      ),
      358 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601044',
        3 => 'Licenses Of Film Producers',
      ),
      359 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601045',
        3 => 'Sale Of Government Publications',
      ),
      360 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601046',
        3 => 'Ict Operators Permit',
      ),
      361 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601047',
        3 => 'Library Services',
      ),
      362 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601048',
        3 => 'Production Of Vcd & Dvd Tapes On Major Carnivals In Imo',
      ),
      363 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601049',
        3 => 'Sharpening Of Gillotine Lauge',
      ),
      364 => 
      array (
        0 => '22001001',
        1 => 'Ministry Of Information And Strategy',
        2 => '22001001-12601050',
        3 => 'Renewal Of Newspaper Agents',
      ),
      365 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701001',
        3 => 'Certification Fees',
      ),
      366 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701002',
        3 => 'Court Awards',
      ),
      367 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701003',
        3 => 'Estate Admin Fees',
      ),
      368 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701004',
        3 => 'Fiat Fees',
      ),
      369 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701005',
        3 => 'Income From Investments',
      ),
      370 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701006',
        3 => 'Interest On Managed Estates',
      ),
      371 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701007',
        3 => 'Legal Services',
      ),
      372 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701008',
        3 => 'Oath Fees',
      ),
      373 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701009',
        3 => 'Sale Of Customary Court Manual',
      ),
      374 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701010',
        3 => 'Sale Of High Court Rules',
      ),
      375 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701011',
        3 => 'Sale Of Law Reports',
      ),
      376 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701012',
        3 => 'Sale Of Law Reports(19921992)',
      ),
      377 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701013',
        3 => 'Sale Of Law Reports(19932003)',
      ),
      378 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701014',
        3 => 'Sale Of Law Reports(19932003)',
      ),
      379 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701015',
        3 => 'Sale Of Old Newspapers',
      ),
      380 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701016',
        3 => 'Sale Of Revised Laws Of Imo State (P)',
      ),
      381 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701017',
        3 => 'Sale Of Revised Laws Of Imo State Yet To Be Produced In Sale Of Revised Laws',
      ),
      382 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701018',
        3 => 'State Administration Fees',
      ),
      383 => 
      array (
        0 => '23001001',
        1 => 'Ministry Of Justice',
        2 => '23001001-12701019',
        3 => 'Trust Fees',
      ),
      384 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801001',
        3 => 'Land Regularization And Certification Of Land/Propertie',
      ),
      385 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801002',
        3 => 'Annual Ground Rent',
      ),
      386 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801003',
        3 => 'Application Fee For Allocation Of State Land',
      ),
      387 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801004',
        3 => 'Application Fee For Building Plan Permit',
      ),
      388 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801005',
        3 => 'Application Fee For Certified True Copy For Certif',
      ),
      389 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801006',
        3 => 'Application Fee For Certified True Copy For Deeds ',
      ),
      390 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801007',
        3 => 'Application Fee For Certified True Copy For Land D',
      ),
      391 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801008',
        3 => 'Application Fee For Change Of Purpose Clause',
      ),
      392 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801009',
        3 => 'Application Fee For Charting Of Plot',
      ),
      393 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801010',
        3 => 'Application Fee For Deed Of Assignment',
      ),
      394 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801011',
        3 => 'Application Fee For Deed Of Cancellation',
      ),
      395 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801012',
        3 => 'Application Fee For Deed Of Conveyance',
      ),
      396 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801013',
        3 => 'Application Fee For Deed Of Devolution',
      ),
      397 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801014',
        3 => 'Application Fee For Deed Of Gift',
      ),
      398 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801015',
        3 => 'Application Fee For Deed Of Grant',
      ),
      399 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801016',
        3 => 'Application Fee For Deed Of Lease',
      ),
      400 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801017',
        3 => 'Application Fee For Deed Of Mortgage',
      ),
      401 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801018',
        3 => 'Application Fee For Deed Of Purchase',
      ),
      402 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801019',
        3 => 'Application Fee For Deed Of Rectification',
      ),
      403 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801020',
        3 => 'Application Fee For Deed Of Release',
      ),
      404 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801021',
        3 => 'Application Fee For Deed Of Sale',
      ),
      405 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801022',
        3 => 'Application Fee For Deed Of SubLease',
      ),
      406 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801023',
        3 => 'Application Fee For Deed Of Surrender',
      ),
      407 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801024',
        3 => 'Application Fee For Deed Of Transfer',
      ),
      408 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801025',
        3 => 'Application Fee For Deed Of Variation',
      ),
      409 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801026',
        3 => 'Application Fee For Deed Of Vesting Assent',
      ),
      410 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801027',
        3 => 'Application Fee For Deed Release',
      ),
      411 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801028',
        3 => 'Application Fee For Devolution Order',
      ),
      412 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801029',
        3 => 'Application Fee For Extension Of Offer Of Customar',
      ),
      413 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801030',
        3 => 'Application Fee For Extension Of Offer Of Statutor',
      ),
      414 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801031',
        3 => 'Application Fee For Extension Of Time For Late Reg',
      ),
      415 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801032',
        3 => 'Application Fee For Extension Of Time For Plot Dev',
      ),
      416 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801033',
        3 => 'Application Fee For Extension Of Time For Registra',
      ),
      417 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801034',
        3 => 'Application Fee For Extension Of Time To Perfect D',
      ),
      418 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801035',
        3 => 'Application Fee For Habitation/Occupation Permit',
      ),
      419 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801036',
        3 => 'Application Fee For Layout Variation',
      ),
      420 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801037',
        3 => 'Application Fee For Legal Search',
      ),
      421 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801038',
        3 => 'Application Fee For Letter Of Administration',
      ),
      422 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801039',
        3 => 'Application Fee For Letter Of Exchange',
      ),
      423 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801040',
        3 => 'Application Fee For Lodgement Of Court Judgement',
      ),
      424 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801041',
        3 => 'Application Fee For Plot Extension',
      ),
      425 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801042',
        3 => 'Application Fee For Plot Merger',
      ),
      426 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801043',
        3 => 'Application Fee For Plot SubDivision',
      ),
      427 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801044',
        3 => 'Application Fee For Power Of Attorney',
      ),
      428 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801045',
        3 => 'Application Fee For Recertification Of Statutory T',
      ),
      429 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801046',
        3 => 'Application Fee For Registration Of Caveat',
      ),
      430 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801047',
        3 => 'Application Fee For Registration Of Objection',
      ),
      431 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801048',
        3 => 'Application Fee For Registration Of Private Layout',
      ),
      432 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801049',
        3 => 'Application Fee For Registration Of Private Plot',
      ),
      433 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801050',
        3 => 'Application Fee For ReGrant Of Customary Rights O',
      ),
      434 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801051',
        3 => 'Application Fee For ReGrant Of Statutory Rights O',
      ),
      435 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801052',
        3 => 'Application Fee For Regularisation Of NonStatutor',
      ),
      436 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801053',
        3 => 'Application Fee For ReInstatement Of Revoked Land',
      ),
      437 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801054',
        3 => 'Application Fee For ReIssuance Of Customary Certi',
      ),
      438 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801055',
        3 => 'Application Fee For ReIssuance Of Letter Of Grant',
      ),
      439 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801056',
        3 => 'Application Fee For ReIssuance Of Statutory Certi',
      ),
      440 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801057',
        3 => 'Application Fee For Release/Surrender Of Legal Mor',
      ),
      441 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801058',
        3 => 'Application Fee For Revocation Of Power Of Attorne',
      ),
      442 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801059',
        3 => 'Application Fee For Signing And Stamping Of Extra ',
      ),
      443 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801060',
        3 => 'Application Fee For Supplemental Mortgage',
      ),
      444 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801061',
        3 => 'Application Fee For Tenancy Agreement',
      ),
      445 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801062',
        3 => 'Application Fees C Of O',
      ),
      446 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801063',
        3 => 'Application For Layout Variation',
      ),
      447 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801064',
        3 => 'Approval Fee For Building Plan Permit',
      ),
      448 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801065',
        3 => 'Approval Fee For Certified True Copy For Certifica',
      ),
      449 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801066',
        3 => 'Approval Fee For Certified True Copy For Deeds Doc',
      ),
      450 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801067',
        3 => 'Approval Fee For Certified True Copy For Land Docu',
      ),
      451 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801068',
        3 => 'Approval Fee For Change Of Purpose Clause',
      ),
      452 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801069',
        3 => 'Approval Fee For Deed Of Assignment',
      ),
      453 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801070',
        3 => 'Approval Fee For Deed Of Cancellation',
      ),
      454 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801071',
        3 => 'Approval Fee For Deed Of Conveyance',
      ),
      455 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801072',
        3 => 'Approval Fee For Deed Of Devolution',
      ),
      456 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801073',
        3 => 'Approval Fee For Deed Of Gift',
      ),
      457 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801074',
        3 => 'Approval Fee For Deed Of Grant',
      ),
      458 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801075',
        3 => 'Approval Fee For Deed Of Lease',
      ),
      459 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801076',
        3 => 'Approval Fee For Deed Of Mortgage',
      ),
      460 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801077',
        3 => 'Approval Fee For Deed Of Purchase',
      ),
      461 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801078',
        3 => 'Approval Fee For Deed Of Rectification',
      ),
      462 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801079',
        3 => 'Approval Fee For Deed Of Release',
      ),
      463 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801080',
        3 => 'Approval Fee For Deed Of Sale',
      ),
      464 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801081',
        3 => 'Approval Fee For Deed Of SubLease',
      ),
      465 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801082',
        3 => 'Approval Fee For Deed Of Surrender',
      ),
      466 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801083',
        3 => 'Approval Fee For Deed Of Transfer',
      ),
      467 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801084',
        3 => 'Approval Fee For Deed Of Variation',
      ),
      468 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801085',
        3 => 'Approval Fee For Deed Of Vesting Assent',
      ),
      469 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801086',
        3 => 'Approval Fee For Deed Release',
      ),
      470 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801087',
        3 => 'Approval Fee For Devolution Order',
      ),
      471 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801088',
        3 => 'Approval Fee For Extension Of Offer Of Customary R',
      ),
      472 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801089',
        3 => 'Approval Fee For Extension Of Offer Of Statutory R',
      ),
      473 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801090',
        3 => 'Approval Fee For Extension Of Time For Late Regist',
      ),
      474 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801091',
        3 => 'Approval Fee For Extension Of Time For Plot Develo',
      ),
      475 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801092',
        3 => 'Approval Fee For Extension Of Time For Registratio',
      ),
      476 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801093',
        3 => 'Approval Fee For Extension Of Time To Perfect Docu',
      ),
      477 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801094',
        3 => 'Approval Fee For Habitation/Occupation Permit',
      ),
      478 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801095',
        3 => 'Approval Fee For Issuance Of Customary Certificate',
      ),
      479 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801096',
        3 => 'Approval Fee For Issuance Of Statutory Certificate',
      ),
      480 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801097',
        3 => 'Approval Fee For Layout Variation',
      ),
      481 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801098',
        3 => 'Approval Fee For Letter Of Administration',
      ),
      482 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801099',
        3 => 'Approval Fee For Letter Of Exchange',
      ),
      483 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801100',
        3 => 'Approval Fee For Lodgement Of Court Judgement',
      ),
      484 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801101',
        3 => 'Approval Fee For Plan Production',
      ),
      485 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801102',
        3 => 'Approval Fee For Plot Allocation',
      ),
      486 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801103',
        3 => 'Approval Fee For Plot Conversion',
      ),
      487 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801104',
        3 => 'Approval Fee For Plot Extension',
      ),
      488 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801105',
        3 => 'Approval Fee For Plot Merger',
      ),
      489 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801106',
        3 => 'Approval Fee For Plot SubDivision',
      ),
      490 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801107',
        3 => 'Approval Fee For Power Of Attorney',
      ),
      491 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801108',
        3 => 'Approval Fee For Registration Of Caveat',
      ),
      492 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801109',
        3 => 'Approval Fee For Registration Of Private Layout',
      ),
      493 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801110',
        3 => 'Approval Fee For Registration Of Private Plot',
      ),
      494 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801111',
        3 => 'Approval Fee For ReGrant Of Customary Rights Of O',
      ),
      495 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801112',
        3 => 'Approval Fee For ReGrant Of Statutory Rights Of O',
      ),
      496 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801113',
        3 => 'Approval Fee For Regularisation Of NonStatutory T',
      ),
      497 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801114',
        3 => 'Approval Fee For ReInstatement Of Revoked Land',
      ),
      498 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801115',
        3 => 'Approval Fee For ReIssuance Of Customary Certific',
      ),
      499 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801116',
        3 => 'Approval Fee For ReIssuance Of Letter Of Grant',
      ),
      500 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801117',
        3 => 'Approval Fee For ReIssuance Of Statutory Certific',
      ),
      501 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801118',
        3 => 'Approval Fee For Release/Surrender Of Legal Mortga',
      ),
      502 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801119',
        3 => 'Approval Fee For Revocation Of Power Of Attorney',
      ),
      503 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801120',
        3 => 'Approval Fee For Supplemental Mortgage',
      ),
      504 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801121',
        3 => 'Approval Fee For Tenancy Agreement',
      ),
      505 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801122',
        3 => 'Approval For Changing Of Purpose',
      ),
      506 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801123',
        3 => 'Approval For Variation',
      ),
      507 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801124',
        3 => 'Arrears Of State Land Rent',
      ),
      508 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801125',
        3 => 'Arrears Of Survival Levy',
      ),
      509 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801126',
        3 => 'Beancon Replacement Fees',
      ),
      510 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801127',
        3 => 'Capital Gains Tax',
      ),
      511 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801128',
        3 => 'Charting Fees For C Of O',
      ),
      512 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801129',
        3 => 'Consent Fee For Approval Of Deed Of Assignment',
      ),
      513 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801130',
        3 => 'Consent Fee For Approval Of Deed Of SubLease',
      ),
      514 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801131',
        3 => 'Consent Fees For Approval Of Conveyance',
      ),
      515 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801132',
        3 => 'Conveyancing Fee For Building Plan Permit',
      ),
      516 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801133',
        3 => 'Conveyancing Fee For Certified True Copy For Deeds',
      ),
      517 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801134',
        3 => 'Conveyancing Fee For Change Of Purpose',
      ),
      518 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801135',
        3 => 'Conveyancing Fee For Habitation/Occupation Permit',
      ),
      519 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801136',
        3 => 'Conveyancing Fee For Plot Allocation',
      ),
      520 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801137',
        3 => 'Conveyancing Fee For Recertification Of Statutory ',
      ),
      521 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801138',
        3 => 'Conveyancing Fee For Registration Of Private Layou',
      ),
      522 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801139',
        3 => 'Conveyancing Fee For Registration Of Private Plot',
      ),
      523 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801140',
        3 => 'Conveyancing Fee For Regularisation Of NonStatuto',
      ),
      524 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801141',
        3 => 'Current Years State Land Rent',
      ),
      525 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801142',
        3 => 'Deed Fees',
      ),
      526 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801143',
        3 => 'Enquires Fees On Layouts',
      ),
      527 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801144',
        3 => 'Fees Allocation Of State Lands',
      ),
      528 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801145',
        3 => 'Fees For Plans Deposit By Land Surveyor',
      ),
      529 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801146',
        3 => 'Fees For Process Application For Filling Station',
      ),
      530 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801147',
        3 => 'Fees For Valuation Of Property',
      ),
      531 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801148',
        3 => 'Handling Charges',
      ),
      532 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801149',
        3 => 'Hire Of Maintenance Equip.',
      ),
      533 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801150',
        3 => 'Hire Of Park/Building Structures',
      ),
      534 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801151',
        3 => 'Inspection Fees For C Of O',
      ),
      535 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801152',
        3 => 'Land Regularization And Certification Of Land/Propert',
      ),
      536 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801153',
        3 => 'Landscaping Services',
      ),
      537 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801154',
        3 => 'Lease Of Open Space',
      ),
      538 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801155',
        3 => 'Lifting Of Survey Plans',
      ),
      539 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801156',
        3 => 'List Records/Administration Fees',
      ),
      540 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801157',
        3 => 'Lost Records/Admin Fees',
      ),
      541 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801158',
        3 => 'Other Fees',
      ),
      542 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801159',
        3 => 'Others (Ground Rent)',
      ),
      543 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801160',
        3 => 'Penalties On Rents Paid In Arrears',
      ),
      544 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801161',
        3 => 'Penalty Fee For Default Of Ground Rent',
      ),
      545 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801162',
        3 => 'Penalty Fee For Default On Payment Of Statutory Fe',
      ),
      546 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801163',
        3 => 'Penalty Fee For Delay To Survey',
      ),
      547 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801164',
        3 => 'Penalty Fee For Land Use Contravention',
      ),
      548 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801165',
        3 => 'Penalty Fee For Late Application For ReGrant',
      ),
      549 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801166',
        3 => 'Penalty Fee For Late Payment Of Statutory Fee',
      ),
      550 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801167',
        3 => 'Penalty Fee For NonDevelopment Of Plot',
      ),
      551 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801168',
        3 => 'Penalty Fee For Penal Rent',
      ),
      552 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801169',
        3 => 'Penalty Fee For Penalty For Building Contravention',
      ),
      553 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801170',
        3 => 'Penalty For Development Without Approval',
      ),
      554 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801171',
        3 => 'Penalty On Rents Paid In Arrears',
      ),
      555 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801172',
        3 => 'Permit Fee For Building Plan Permit',
      ),
      556 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801173',
        3 => 'Permit Fee For Habitation/Occupation Permit',
      ),
      557 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801174',
        3 => 'Permit Fee For Setting Out Permit',
      ),
      558 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801175',
        3 => 'Permit Fee For Stage Completion Permit',
      ),
      559 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801176',
        3 => 'Plot Development Fees',
      ),
      560 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801177',
        3 => 'Plot Development Levy',
      ),
      561 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801178',
        3 => 'Premium On Land',
      ),
      562 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801179',
        3 => 'Prep Of Misc For L/Govt & Communities',
      ),
      563 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801180',
        3 => 'Processing Fee For Online Geospatial Services',
      ),
      564 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801181',
        3 => 'Product Sale Charge For Sale Of Gis Products',
      ),
      565 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801182',
        3 => 'Product Sale Charge For Sale Of Map Products',
      ),
      566 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801183',
        3 => 'Production Charge For Site Plan',
      ),
      567 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801184',
        3 => 'Publication Fees',
      ),
      568 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801185',
        3 => 'Quarry Lease',
      ),
      569 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801186',
        3 => 'Ratification Fees',
      ),
      570 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801187',
        3 => 'ReCertification Of Certicates Of Occupancy (Igis)',
      ),
      571 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801188',
        3 => 'Registration Fee For Deed Of Assignment',
      ),
      572 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801189',
        3 => 'Registration Fee For Deed Of Cancellation',
      ),
      573 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801190',
        3 => 'Registration Fee For Deed Of Conveyance',
      ),
      574 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801191',
        3 => 'Registration Fee For Deed Of Devolution',
      ),
      575 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801192',
        3 => 'Registration Fee For Deed Of Gift',
      ),
      576 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801193',
        3 => 'Registration Fee For Deed Of Grant',
      ),
      577 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801194',
        3 => 'Registration Fee For Deed Of Lease',
      ),
      578 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801195',
        3 => 'Registration Fee For Deed Of Mortgage',
      ),
      579 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801196',
        3 => 'Registration Fee For Deed Of Purchase',
      ),
      580 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801197',
        3 => 'Registration Fee For Deed Of Rectification',
      ),
      581 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801198',
        3 => 'Registration Fee For Deed Of Release',
      ),
      582 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801199',
        3 => 'Registration Fee For Deed Of Sale',
      ),
      583 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801200',
        3 => 'Registration Fee For Deed Of SubLease',
      ),
      584 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801201',
        3 => 'Registration Fee For Deed Of Surrender',
      ),
      585 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801202',
        3 => 'Registration Fee For Deed Of Transfer',
      ),
      586 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801203',
        3 => 'Registration Fee For Deed Of Variation',
      ),
      587 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801204',
        3 => 'Registration Fee For Deed Of Vesting Assent',
      ),
      588 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801205',
        3 => 'Registration Fee For Deed Release',
      ),
      589 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801206',
        3 => 'Registration Fee For Devolution Order',
      ),
      590 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801207',
        3 => 'Registration Fee For Letter Of Administration',
      ),
      591 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801208',
        3 => 'Registration Fee For Letter Of Exchange',
      ),
      592 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801209',
        3 => 'Registration Fee For Lodgement Of Court Judgement',
      ),
      593 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801210',
        3 => 'Registration Fee For Power Of Attorney',
      ),
      594 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801211',
        3 => 'Registration Fee For Registration Of Caveat',
      ),
      595 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801212',
        3 => 'Registration Fee For Release/Surrender Of Legal Mo',
      ),
      596 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801213',
        3 => 'Registration Fee For Revocation Of Power Of Attorn',
      ),
      597 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801214',
        3 => 'Registration Fee For Supplemental Mortgage',
      ),
      598 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801215',
        3 => 'Registration Fee For Tenancy Agreement',
      ),
      599 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801216',
        3 => 'Registration Of Converyances',
      ),
      600 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801217',
        3 => 'Rent On Government Property',
      ),
      601 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801218',
        3 => 'Rent On Govt. Quarters Outside Imo State',
      ),
      602 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801219',
        3 => 'Sale Of Flowers & Plants/Grass',
      ),
      603 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801220',
        3 => 'Sale Of Grass',
      ),
      604 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801221',
        3 => 'Sale Of Layouts & Master Plans',
      ),
      605 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801222',
        3 => 'Sale Of Maps',
      ),
      606 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801223',
        3 => 'Sale Of Old Newspapers',
      ),
      607 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801224',
        3 => 'Sale Of Slabs',
      ),
      608 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801225',
        3 => 'Search Fees',
      ),
      609 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801226',
        3 => 'Service Charge For Spatial Data Repository Service',
      ),
      610 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801227',
        3 => 'Special Maps Survey',
      ),
      611 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801228',
        3 => 'Stamp Duties',
      ),
      612 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801229',
        3 => 'State Share On Land Use Change',
      ),
      613 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801230',
        3 => 'Statutory Fee For Grant Of Rights Of Occupancy (Ap',
      ),
      614 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801231',
        3 => 'Statutory Fee For Grant Of Rights Of Occupancy (Pr',
      ),
      615 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801232',
        3 => 'Statutory Fee For Grant Of Rights Of Occupancy (Pu',
      ),
      616 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801233',
        3 => 'Statutory Fee For Grant Of Rights Of Occupancy (Re',
      ),
      617 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801234',
        3 => 'Statutory Fee For Grant Of Rights Of Occupancy (Si',
      ),
      618 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801235',
        3 => 'Survey Fee For Additional Field Work',
      ),
      619 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801236',
        3 => 'Survey Fee For Establishment Of Beacon',
      ),
      620 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801237',
        3 => 'Survey Fee For Lifting Of Survey Plan',
      ),
      621 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801238',
        3 => 'Survey Fee For Office Work And Processing',
      ),
      622 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801239',
        3 => 'Survey Fee For Plot Identification',
      ),
      623 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801240',
        3 => 'Survey Fee For ReEstablishment Of Beacon',
      ),
      624 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801241',
        3 => 'Survey Fee For Tdp Production',
      ),
      625 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801242',
        3 => 'Survey Fee For Transportation / Logistics Cost',
      ),
      626 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801243',
        3 => 'Survey Fees',
      ),
      627 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801244',
        3 => 'Survey Fees For Plans Deposited By Registration',
      ),
      628 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801245',
        3 => 'Survey Fees Handling Charges',
      ),
      629 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801246',
        3 => 'Temporary Occupation Licences',
      ),
      630 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801247',
        3 => 'Tender Fees',
      ),
      631 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801248',
        3 => 'Transfer Of Ownership',
      ),
      632 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801249',
        3 => 'Use Of Park Facilities & Play Equipment',
      ),
      633 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801250',
        3 => 'Valuation Fee For Compensation',
      ),
      634 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801251',
        3 => 'Valuation Fee For Land Transaction',
      ),
      635 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801252',
        3 => 'Valuation Fee For Land Use Contravention',
      ),
      636 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801253',
        3 => 'Valuation Fee For Occupancy Permit',
      ),
      637 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801254',
        3 => 'Valuation Fee For ReGrant Of Title',
      ),
      638 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801255',
        3 => 'Valuation Fee For Rental Of Government Property',
      ),
      639 => 
      array (
        0 => '24001001',
        1 => 'Ministry Of Lands, Survey And Urban Planning',
        2 => '24001001-12801256',
        3 => 'Registration Of C Of O',
      ),
      640 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051001',
        3 => '10% Wht On Consultants',
      ),
      641 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051002',
        3 => '5% Wht On Contracts',
      ),
      642 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051003',
        3 => 'Application FeesCreation Of Autonomous Commu',
      ),
      643 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051004',
        3 => 'Application For Submission Fees',
      ),
      644 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051005',
        3 => 'Certifications Of Documents Of Autonomous Commu',
      ),
      645 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051006',
        3 => 'Certified True Copies Of Documents',
      ),
      646 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051007',
        3 => 'Marriage Ordinance Fees',
      ),
      647 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051008',
        3 => 'Oath Fees',
      ),
      648 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051009',
        3 => 'Petitions',
      ),
      649 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051010',
        3 => 'Recognition Of Traditional Rulers',
      ),
      650 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051011',
        3 => 'RegistrationNew Autonomous Communities',
      ),
      651 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051012',
        3 => 'Registration Of Churches For The Conduct Of Mar',
      ),
      652 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051013',
        3 => 'Registration Of Town Unions',
      ),
      653 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051014',
        3 => 'Registration Of Town Unions Executives',
      ),
      654 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051015',
        3 => 'Renewal And Reg. Of Town Unions',
      ),
      655 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051016',
        3 => 'Staff Of Office Of Aneze',
      ),
      656 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051017',
        3 => 'Tender Fees',
      ),
      657 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051018',
        3 => 'Operational Permit',
      ),
      658 => 
      array (
        0 => '14001001',
        1 => 'Ministry Of Local Government And Chieftancy Affair',
        2 => '14001001-12051019',
        3 => 'Capitation Rate',
      ),
      659 => 
      array (
        0 => '15001001',
        1 => 'Ministry Of Planning And Economic Development',
        2 => '15001001-12071001',
        3 => '10% Wht On Consultants',
      ),
      660 => 
      array (
        0 => '15001001',
        1 => 'Ministry Of Planning And Economic Development',
        2 => '15001001-12071002',
        3 => '5% Wht On Contracts',
      ),
      661 => 
      array (
        0 => '15001001',
        1 => 'Ministry Of Planning And Economic Development',
        2 => '15001001-12071003',
        3 => 'Identification Fees',
      ),
      662 => 
      array (
        0 => '15001001',
        1 => 'Ministry Of Planning And Economic Development',
        2 => '15001001-12071004',
        3 => 'Sale Of Budget',
      ),
      663 => 
      array (
        0 => '15001001',
        1 => 'Ministry Of Planning And Economic Development',
        2 => '15001001-12071005',
        3 => 'Sale Of Bulletin',
      ),
      664 => 
      array (
        0 => '15001001',
        1 => 'Ministry Of Planning And Economic Development',
        2 => '15001001-12071006',
        3 => 'Sale Of Unserviceable Items',
      ),
      665 => 
      array (
        0 => '15001001',
        1 => 'Ministry Of Planning And Economic Development',
        2 => '15001001-12071007',
        3 => 'Tender Fees',
      ),
      666 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101001',
        3 => 'Certification And Suitability Certificate',
      ),
      667 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101002',
        3 => 'Inspection And Renewal',
      ),
      668 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101003',
        3 => '10% Wht Consultants',
      ),
      669 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101004',
        3 => '5% Wht On Contracts',
      ),
      670 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101005',
        3 => 'Administrative Fees',
      ),
      671 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101006',
        3 => 'Community Rate',
      ),
      672 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101007',
        3 => 'Course Fees',
      ),
      673 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101008',
        3 => 'Hire Of Gen Sets',
      ),
      674 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101009',
        3 => 'Hire Of Plants And Equipments',
      ),
      675 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101010',
        3 => 'Inspection And StandBy, Inflatable, Multi',
      ),
      676 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101011',
        3 => 'Other Fees',
      ),
      677 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101012',
        3 => 'Permit To Drill Boreholes',
      ),
      678 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101013',
        3 => 'Plant Printing',
      ),
      679 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101014',
        3 => 'Registration & Renewal FeesContractors',
      ),
      680 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101015',
        3 => 'Registration & Renewal Of Town Unions',
      ),
      681 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101016',
        3 => 'Sale Of FormsTown Union Registration',
      ),
      682 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101017',
        3 => 'Sale Of Reg. Forms To Contractors',
      ),
      683 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101018',
        3 => 'Sale Of Scraps',
      ),
      684 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101019',
        3 => 'Street Light Pole Advert Fees',
      ),
      685 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101020',
        3 => 'Tender Fees',
      ),
      686 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101021',
        3 => 'Training And StandBy',
      ),
      687 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101022',
        3 => 'Utility Handling Charges',
      ),
      688 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101023',
        3 => 'Fire Safety Certificate Fees',
      ),
      689 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101024',
        3 => 'Okigwe Water Scheme',
      ),
      690 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101025',
        3 => 'OwerriEbeiri Water Scheme',
      ),
      691 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101026',
        3 => 'Emekuku Water Scheme',
      ),
      692 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101027',
        3 => 'Achingali Water Scheme',
      ),
      693 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101028',
        3 => 'Hire Of Hiab Self Loader',
      ),
      694 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101029',
        3 => 'Hire Of Platform Vehicle',
      ),
      695 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101030',
        3 => 'Commercialization Of Electrical Services In Rural',
      ),
      696 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101031',
        3 => 'Hire Of Compressor',
      ),
      697 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101032',
        3 => 'Hire Of Dewatery Pump',
      ),
      698 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101033',
        3 => 'Fire Safety Certificate Report And Standby',
      ),
      699 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101034',
        3 => 'Fire Service Training Fees',
      ),
      700 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101035',
        3 => 'Initial Fire Safety Inspection Fess',
      ),
      701 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101036',
        3 => 'Initial Fees For Existing Filling Station And Hot',
      ),
      702 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101037',
        3 => 'Renewal Fees For Existing Petrol Station And Hote',
      ),
      703 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101038',
        3 => 'Petrol Fees For Independent Markets',
      ),
      704 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101039',
        3 => 'Bottled Water Production',
      ),
      705 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101040',
        3 => 'Borehole Analysis Certification',
      ),
      706 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101041',
        3 => 'Registration Fee For All Bottled And Sachet Water',
      ),
      707 => 
      array (
        0 => '17002001',
        1 => 'Ministry Of Public Utilities And Rural Development',
        2 => '17002001-12101042',
        3 => 'Renewal Of Bottled Water And Sachet Water Compani',
      ),
      708 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201001',
        3 => 'Tailoring Services',
      ),
      709 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201002',
        3 => 'Annual Fire Inspection Fee',
      ),
      710 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201003',
        3 => 'Fees For Heavy Vehicle Permit',
      ),
      711 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201004',
        3 => 'Computer Manifest Insurance Commission',
      ),
      712 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201005',
        3 => 'Ferry Fees',
      ),
      713 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201006',
        3 => 'Fire Certificate Report',
      ),
      714 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201007',
        3 => 'Fire Service Training Fee',
      ),
      715 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201008',
        3 => 'First Certificate Inspection FeeBank',
      ),
      716 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201009',
        3 => 'Hire Of Plants And Equip',
      ),
      717 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201010',
        3 => 'Inspection Fees For Private Mechanic Workshop',
      ),
      718 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201011',
        3 => 'Mot Certificate Commission',
      ),
      719 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201012',
        3 => 'Other Fees',
      ),
      720 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201013',
        3 => 'Penalty For Heavy Vehicle With Load Limits',
      ),
      721 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201014',
        3 => 'Registration Fees For Auctioneers',
      ),
      722 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201015',
        3 => 'Registration Of Commercial Vehicles',
      ),
      723 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201016',
        3 => 'Terry Fee',
      ),
      724 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201017',
        3 => 'Trade Test Fee',
      ),
      725 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201018',
        3 => 'Training Fees For Chief Drivers',
      ),
      726 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201019',
        3 => 'Vehicle Inspection Fee',
      ),
      727 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201020',
        3 => 'Mot Fees',
      ),
      728 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201021',
        3 => 'Imo Transort Company (Revenue)',
      ),
      729 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201022',
        3 => 'Issuance Of National Certificate',
      ),
      730 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201023',
        3 => 'Issuance Of Emblem',
      ),
      731 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201024',
        3 => 'Registration/Renewal Of Transport Companies',
      ),
      732 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201025',
        3 => 'Traffic Environment/Routine Road Checks',
      ),
      733 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201026',
        3 => 'Registration/Renewal Of Driving School',
      ),
      734 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201027',
        3 => 'Testing/Signing Of Applicant Drivers Pro National',
      ),
      735 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201028',
        3 => 'Registration/Renewal Of Parks',
      ),
      736 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201029',
        3 => 'Keke/Motorcycle Daily Tolls',
      ),
      737 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201030',
        3 => 'Registration/Renewal Of Public Mass Transit In The State',
      ),
      738 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201031',
        3 => 'Haulage Fee',
      ),
      739 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201032',
        3 => 'Truck Wavers',
      ),
      740 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201033',
        3 => 'Parking Permint',
      ),
      741 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201034',
        3 => 'Transport Company Registration',
      ),
      742 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201035',
        3 => 'Taxes 5% With Holding Tax On Contracts',
      ),
      743 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201036',
        3 => '10% Tax On Consulting Fee',
      ),
      744 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201037',
        3 => 'Fine/Fee',
      ),
      745 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201038',
        3 => 'Tender Fee',
      ),
      746 => 
      array (
        0 => '49001001',
        1 => 'Ministry Of Transport',
        2 => '49001001-15201039',
        3 => 'Vio Offences/ Road Check',
      ),
      747 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201001',
        3 => 'Annual Fire Inspection Fees',
      ),
      748 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201002',
        3 => 'Fees For Heavy Vehicle Pemits',
      ),
      749 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201003',
        3 => 'Computers Manifest Insurance Commissions',
      ),
      750 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201004',
        3 => ' Ferry Fees',
      ),
      751 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201005',
        3 => 'Fire Certificate Reports',
      ),
      752 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201006',
        3 => 'Fire Service Training Fees',
      ),
      753 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201007',
        3 => ' First Certificate Inspection FeesBank',
      ),
      754 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201008',
        3 => 'Hire Of Plants & Equip',
      ),
      755 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201009',
        3 => 'Inspection Fees For Private Mechanic Workshops',
      ),
      756 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201010',
        3 => 'Materials Laboratory Test Proceeds',
      ),
      757 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201011',
        3 => 'Mot Certificate Commission',
      ),
      758 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201012',
        3 => 'Other Fees',
      ),
      759 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201013',
        3 => 'Penalty For Heavy Vehicles With Load Limit',
      ),
      760 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201014',
        3 => 'Printing Of Building Plans',
      ),
      761 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201015',
        3 => 'Proceeds From Workshop Products',
      ),
      762 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201016',
        3 => 'Registration Fees For Auctioneers',
      ),
      763 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201017',
        3 => 'Registration Of Commercial Vehicles',
      ),
      764 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201018',
        3 => 'Registration Of Contractors',
      ),
      765 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201019',
        3 => 'Renewal Fees For Auctioneers',
      ),
      766 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201020',
        3 => 'Renewal Fees For Existing Petrol StationLocal Marketer',
      ),
      767 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201021',
        3 => 'Renewal Fees For Existing Petrol StationMultinationals',
      ),
      768 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201022',
        3 => 'Renewal Fees For Existing Petrol StationsIndependent',
      ),
      769 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201023',
        3 => 'Renewal Fees For Existing Petrol StationsLocal',
      ),
      770 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201024',
        3 => ' Renewal Fees For Private Mechanic Workshops',
      ),
      771 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201025',
        3 => 'Rent On Govt. Quarters Outside Imo State',
      ),
      772 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201026',
        3 => 'Rent On Junior Staff Quarters',
      ),
      773 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201027',
        3 => 'Rent On Parliament Quarters For Legislatures',
      ),
      774 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201028',
        3 => 'Rent On Senior Staff Quarters',
      ),
      775 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201029',
        3 => 'Sale Of Housing Estate Nekede',
      ),
      776 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201030',
        3 => ' Sale Of Housing Estate Okporo',
      ),
      777 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201031',
        3 => 'Sale Of Old Newspapers',
      ),
      778 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201032',
        3 => 'Street Light Ploe Advart Fees',
      ),
      779 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201033',
        3 => 'Tailoring Services',
      ),
      780 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201034',
        3 => 'Tender Fees',
      ),
      781 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201035',
        3 => 'Terry Fees',
      ),
      782 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201036',
        3 => 'Trade Test Fees',
      ),
      783 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201037',
        3 => 'Training Fees For Chief Drivers',
      ),
      784 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201038',
        3 => 'Vehicle Inspection Fees',
      ),
      785 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201039',
        3 => 'Mot Fees',
      ),
      786 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201040',
        3 => 'Imo Transport Company (Revenue)',
      ),
      787 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201041',
        3 => 'Issuance Of National Certificate Of Roadworthiness',
      ),
      788 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201042',
        3 => 'Issuance Of Emblems',
      ),
      789 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201043',
        3 => 'Registration/Renewal Of Transport Companies',
      ),
      790 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201044',
        3 => 'Traffic Environment/Routine Road Checks',
      ),
      791 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201045',
        3 => 'Registration/Renewal Of Driving School',
      ),
      792 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201046',
        3 => 'Testing/Siging Of Applicant Drivers Fro National Drivers License',
      ),
      793 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201047',
        3 => 'Registration/Renewal Of Parks',
      ),
      794 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201048',
        3 => 'Keke/Motorcycle Daily Tolls',
      ),
      795 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201049',
        3 => 'Registration/Renewal Of Public Mass Transit In The State',
      ),
      796 => 
      array (
        0 => '38001001',
        1 => 'Ministry Of Transport And Housing',
        2 => '38001001-14201050',
        3 => 'Imo State Manifest Scheme',
      ),
      797 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091001',
        3 => '5% Withholding Tax',
      ),
      798 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091002',
        3 => 'Adoption Fees',
      ),
      799 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091003',
        3 => 'Application Fee For Ngo',
      ),
      800 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091004',
        3 => 'Application Fee For Orphanage Home',
      ),
      801 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091005',
        3 => 'Application Fees For Day Care Center/Creche',
      ),
      802 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091006',
        3 => 'Approval Fee For Day Care',
      ),
      803 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091007',
        3 => 'Big Motherless Babies Home',
      ),
      804 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091008',
        3 => 'Creche Fees',
      ),
      805 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091009',
        3 => 'F.S.P. Park Facilities',
      ),
      806 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091010',
        3 => 'F.S.P. Shop',
      ),
      807 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091011',
        3 => 'Facility/Fee Inspection',
      ),
      808 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091012',
        3 => 'Final Approval Fee For Orphanage',
      ),
      809 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091013',
        3 => 'Final Approval Ngo',
      ),
      810 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091014',
        3 => 'Hire Of Childrens Parliament Hall',
      ),
      811 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091015',
        3 => 'Hire Of F.S.P Hall',
      ),
      812 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091016',
        3 => 'Hire Of Hall',
      ),
      813 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091017',
        3 => 'Hire Of Open Space',
      ),
      814 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091018',
        3 => 'Hire Of Open SpaceOrlu',
      ),
      815 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091019',
        3 => 'Hire Of Seats And Canopies',
      ),
      816 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091020',
        3 => 'Inspection Fee For Day Care',
      ),
      817 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091021',
        3 => 'Inspection Fee For Ngo',
      ),
      818 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091022',
        3 => 'Inspection Fees',
      ),
      819 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091023',
        3 => 'License Registration',
      ),
      820 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091024',
        3 => 'Matrimonial Cases',
      ),
      821 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091025',
        3 => 'Mini StadiumF.S.P Schools',
      ),
      822 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091026',
        3 => 'Miscellaneous',
      ),
      823 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091027',
        3 => 'Processing Fee For Ngo',
      ),
      824 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091028',
        3 => 'Processing Fee For Orphanage',
      ),
      825 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091029',
        3 => 'Processing Fees For Day Care Center/Creche',
      ),
      826 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091030',
        3 => 'Refund Of Fertilizer Loan',
      ),
      827 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091031',
        3 => 'Reg & Renewal Of Social Clubs And Organisations',
      ),
      828 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091032',
        3 => 'Reg. Of Day Centers',
      ),
      829 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091033',
        3 => 'Registration Fee For Orphanage Home',
      ),
      830 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091034',
        3 => 'Registration Of Day Care',
      ),
      831 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091035',
        3 => 'Registration Of Ngo\'s',
      ),
      832 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091036',
        3 => 'Registration Of Social Clubs And Organizations',
      ),
      833 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091037',
        3 => 'Renewal Fee For Day Care Center/Creche',
      ),
      834 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091038',
        3 => 'Renewal Fee For Orpahanage',
      ),
      835 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091039',
        3 => 'Renewal Fee Ngo',
      ),
      836 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091040',
        3 => 'Renewal Of Social Clubs/Organization',
      ),
      837 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091041',
        3 => 'Revenue From Shops',
      ),
      838 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091042',
        3 => 'Sale Of Appl. Form For Creche Facilities',
      ),
      839 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091043',
        3 => 'Sale Of Fertilizer',
      ),
      840 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091044',
        3 => 'Sale Of Unserviceable Items',
      ),
      841 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091045',
        3 => 'School Fee (F.S.P)',
      ),
      842 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091046',
        3 => 'Skill Acquisition',
      ),
      843 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091047',
        3 => 'Tender Fees',
      ),
      844 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091048',
        3 => 'Trade Fair Proceeds',
      ),
      845 => 
      array (
        0 => '17001001',
        1 => 'Ministry Of Women Affairs',
        2 => '17001001-12091049',
        3 => '10% Wht Consultants',
      ),
      846 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901001',
        3 => '10% Wht On Consultants',
      ),
      847 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901002',
        3 => '5% Wht On Contracts',
      ),
      848 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901003',
        3 => 'Application Forms For Reg. & Renewal Of Contracts',
      ),
      849 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901004',
        3 => 'Condemned Stores',
      ),
      850 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901005',
        3 => ' Fee For Inspection Of Private Mechanic Workshops',
      ),
      851 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901006',
        3 => 'Fee For Renewal Of Private Mechanic Workshops',
      ),
      852 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901007',
        3 => ' Fees For Appoval Of Petrol Stations',
      ),
      853 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901008',
        3 => 'Fees For Closing Of Roads In Urban Areas',
      ),
      854 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901009',
        3 => 'Fees For Inspection Of Priv. Mech. W/Shops',
      ),
      855 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901010',
        3 => 'Government Unserviceable Equipment',
      ),
      856 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901011',
        3 => 'Hire Of Generation Sets And Illumination Gears',
      ),
      857 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901012',
        3 => ' Hire Of Govt. Vehicles',
      ),
      858 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901013',
        3 => ' Registration And Renewal Of Contractors',
      ),
      859 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901014',
        3 => ' Tender Fees',
      ),
      860 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901015',
        3 => ' Registration Fee For Auctioneers',
      ),
      861 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901016',
        3 => ' Renewal Fees For Auctioneers',
      ),
      862 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901017',
        3 => ' Material Laboratory Test Proceeds',
      ),
      863 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901018',
        3 => ' Hire Of Plant And Equipment',
      ),
      864 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901019',
        3 => ' Renewal Fees Of Contractors Registration',
      ),
      865 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901020',
        3 => 'Proceeds From Workshop Products',
      ),
      866 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901021',
        3 => 'Renewal Fees For Existing Petrol StationLocal Marketer',
      ),
      867 => 
      array (
        0 => '25001001',
        1 => 'Ministry Of Works',
        2 => '25001001-12901022',
        3 => 'Right Of Way',
      ),
      868 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041001',
        3 => 'Sale Of Tourism Tapes',
      ),
      869 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041002',
        3 => 'Permit Letter To Hospitality',
      ),
      870 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041003',
        3 => 'Organizations',
      ),
      871 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041004',
        3 => 'Sale Of Ahajioku Colloquium',
      ),
      872 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041005',
        3 => 'Sale Of Contractor Forms',
      ),
      873 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041006',
        3 => 'Tourism Development Levy',
      ),
      874 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041007',
        3 => 'Registration Of Cultural Groups',
      ),
      875 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041008',
        3 => 'Hotel Renewal Fees',
      ),
      876 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041009',
        3 => 'Reg./Renewal Of Artists',
      ),
      877 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041010',
        3 => 'Renewal Of Cultural Groups',
      ),
      878 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041011',
        3 => 'Fast Food Registration Fees',
      ),
      879 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041012',
        3 => 'Fast Food Renewal Fee',
      ),
      880 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041013',
        3 => 'Restaurant Registration',
      ),
      881 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041014',
        3 => 'Restraunt Renewal Fee',
      ),
      882 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041015',
        3 => 'Sale Of Ahajioku Publications And Lectures',
      ),
      883 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041016',
        3 => '10% Wht Consultants',
      ),
      884 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041017',
        3 => '5% Wht On Contracts',
      ),
      885 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041018',
        3 => 'Registration & Renewal Of Contractors',
      ),
      886 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041019',
        3 => 'Hotel Registration Fees',
      ),
      887 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041020',
        3 => 'Bukateria Registration Fee',
      ),
      888 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041021',
        3 => 'Bukateria Renewal Fee',
      ),
      889 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041022',
        3 => 'Tour Operator/ Air Travel Registration Fee',
      ),
      890 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041023',
        3 => 'Tour Operator/ Air Travel Renewal Fee',
      ),
      891 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041024',
        3 => 'Club Houses/ SeatOut Houses Registration Fee',
      ),
      892 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041025',
        3 => 'Club Houses/ SeatOut Houses Renewal Fee',
      ),
      893 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041026',
        3 => 'Registration Of Artists',
      ),
      894 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041027',
        3 => 'Sale Of Carnival Tapes',
      ),
      895 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041028',
        3 => 'Sale Of Ahajioku Lectures',
      ),
      896 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041029',
        3 => 'Inspection Fee For New Hotels',
      ),
      897 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041030',
        3 => 'Application Fee For Amusement Park',
      ),
      898 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041031',
        3 => 'Inspection Fee For Amusement Park',
      ),
      899 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041032',
        3 => 'Registration Fee For Amusement Park',
      ),
      900 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041033',
        3 => 'Application Fee For Entertainment Centers',
      ),
      901 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041034',
        3 => 'Inspection Fee For Entertainment Center',
      ),
      902 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041035',
        3 => 'Registration Fee For Entertainment Center',
      ),
      903 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041036',
        3 => 'Application Fee For Event Center',
      ),
      904 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041037',
        3 => 'Inspection Fee For Eateries',
      ),
      905 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041038',
        3 => 'Application Fee For Eateries',
      ),
      906 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041039',
        3 => 'Registration Fee For Eateries',
      ),
      907 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041040',
        3 => 'Inspection Fee For Event Centers',
      ),
      908 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041041',
        3 => 'Lease Rent For Imo Concorde And Casino Hotel',
      ),
      909 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041042',
        3 => 'Lease Rent For Imo Hotel Ltd',
      ),
      910 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041043',
        3 => 'Lease Rent For Oguta Lake Resort',
      ),
      911 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041044',
        3 => 'Lease Rent Of Golf Course Oguta',
      ),
      912 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041045',
        3 => 'Lease Rent Of Conference Hall Oguta',
      ),
      913 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041046',
        3 => 'Hotel Accomodation (Room) Charges/Consumption Charges',
      ),
      914 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041047',
        3 => 'Guest House Motel Application Fee',
      ),
      915 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041048',
        3 => 'Inspection Fee For Guest House/Motel',
      ),
      916 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041049',
        3 => 'Registration Fee For Guest House/ Motel',
      ),
      917 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041050',
        3 => 'Inspection Fee For Restaurant/ Fastfood',
      ),
      918 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041051',
        3 => 'Free Standing Registration',
      ),
      919 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041052',
        3 => 'Operational Permit For Free Standing Registration',
      ),
      920 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041053',
        3 => 'Application Fee For Night Clubs',
      ),
      921 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041054',
        3 => 'Inspection Fee For Night Clubs',
      ),
      922 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041055',
        3 => 'Registration Fee For Night Clubs',
      ),
      923 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041056',
        3 => 'Operational Permit For Night Clubs',
      ),
      924 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041057',
        3 => 'Operational Permit Renewal For Night Clubs',
      ),
      925 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041058',
        3 => 'Travel Anfd Tours Application Fee',
      ),
      926 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041059',
        3 => 'Inspection Fee For Travel And Tours',
      ),
      927 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041060',
        3 => 'Operational Permit For Travel And Tours',
      ),
      928 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041061',
        3 => 'Operational Permit Renewal For Travel And Tours',
      ),
      929 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041062',
        3 => 'Registration Of Artist On Imo Creativity Web/Directory',
      ),
      930 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041063',
        3 => 'Stand Allocation Fee For Creativity Arts/Artists Exhibition/Trade ',
      ),
      931 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041064',
        3 => 'Registration Fee For Cinemas/Theater Houses',
      ),
      932 => 
      array (
        0 => '13001001',
        1 => 'Ministry Of Culture And Tourism',
        2 => '13001001-12041065',
        3 => 'Registration Fee/Form For Talent Hunt Show/Program',
      ),
      933 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201001',
        3 => 'Denial Of Legitimate Service Paid For',
      ),
      934 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201002',
        3 => 'Mutilation Of Dates And Numbers',
      ),
      935 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201003',
        3 => 'No Certificate Of Fitness/Approved Certification',
      ),
      936 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201004',
        3 => 'No Liquor License',
      ),
      937 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201005',
        3 => 'Non Use Of Uv Light',
      ),
      938 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201006',
        3 => 'Sale/Display/Distribution Of Adulterated Products',
      ),
      939 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201007',
        3 => 'Unauthorized/Unqualified Personnel',
      ),
      940 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201008',
        3 => 'Use Of Unapproved Ingredients',
      ),
      941 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201009',
        3 => '10% Wht On Consultants',
      ),
      942 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201010',
        3 => '5% Wht On Contracts',
      ),
      943 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201011',
        3 => 'Agricultural Control Post On Food Stuff, Vegetables And Fruits(S',
      ),
      944 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201012',
        3 => 'Application Fees For Registration Of CoOperativeSocieties',
      ),
      945 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201013',
        3 => 'Arbitrary Fee',
      ),
      946 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201014',
        3 => 'Arrears Of Cooperative Audit And Supervision Fees',
      ),
      947 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201015',
        3 => 'AudioVisual Aid: Sale Of Products',
      ),
      948 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201016',
        3 => 'Cashew Produce Inspection Fees',
      ),
      949 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201017',
        3 => 'Central Produce Beach',
      ),
      950 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201018',
        3 => 'Cocoa Produce Inspection Fees',
      ),
      951 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201019',
        3 => 'Com. Based Ind. Projects Application Forms',
      ),
      952 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201020',
        3 => 'Commission On Sale Of Industrial Publications',
      ),
      953 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201021',
        3 => 'Commodity Purchase Fees On Industrial Goods(Forth Schedule)',
      ),
      954 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201022',
        3 => 'Coop. College Accommodation Charges',
      ),
      955 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201023',
        3 => 'Cooperative Audit & Supervision Fees',
      ),
      956 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201024',
        3 => 'Cooperative College Accommodation Charges',
      ),
      957 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201025',
        3 => 'Cooperative College Application Fees',
      ),
      958 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201026',
        3 => 'Cooperative College Game And Sports Levy',
      ),
      959 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201027',
        3 => 'CooperativecollegeTutition Fees',
      ),
      960 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201028',
        3 => 'Directors Fees',
      ),
      961 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201029',
        3 => 'Dirty Environment',
      ),
      962 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201030',
        3 => 'Disobedience To Summon',
      ),
      963 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201031',
        3 => 'Display/Sale Of Expired Goods',
      ),
      964 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201032',
        3 => 'Display/Sale Without Label/ No Proper Information',
      ),
      965 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201033',
        3 => 'Essential Commodities',
      ),
      966 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201034',
        3 => 'Exhibitions',
      ),
      967 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201035',
        3 => 'Fresh Palm Fruit BunchProduce Inspection Fees',
      ),
      968 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201036',
        3 => 'Gul Cor Ogut',
      ),
      969 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201037',
        3 => 'HireCanteen Facilities At Orlu & Okigwe',
      ),
      970 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201038',
        3 => 'Hire Of Conference Room',
      ),
      971 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201039',
        3 => 'Hire: Canteen Facilities At Orlu And Okigwe',
      ),
      972 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201040',
        3 => 'Imo International Market: Allocation Fees',
      ),
      973 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201041',
        3 => 'Investment Opportunities In Imo',
      ),
      974 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201042',
        3 => 'Lease RentOguta Hotel',
      ),
      975 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201043',
        3 => 'Lease Rent Of Imo Concorde Hotels Owerri',
      ),
      976 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201044',
        3 => 'Lease Rent Of Oguta Lake Hotels And Gulf CourseOguta',
      ),
      977 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201045',
        3 => 'Liquidation Fees',
      ),
      978 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201046',
        3 => 'Measure Cups',
      ),
      979 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201047',
        3 => 'Minerals Produce Fees(Third Schedule)',
      ),
      980 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201048',
        3 => 'Miscellaneous Fees',
      ),
      981 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201049',
        3 => 'No Fly Catchers',
      ),
      982 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201050',
        3 => 'No Resident Chemist',
      ),
      983 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201051',
        3 => 'No Safety/Proper Wear',
      ),
      984 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201052',
        3 => 'Non Use Of Sterilizing Machine',
      ),
      985 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201053',
        3 => 'Okigwe Pottery CenterSale Of Products',
      ),
      986 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201054',
        3 => 'Other Fees',
      ),
      987 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201055',
        3 => 'Palm Kernel Produce Inspection Fees',
      ),
      988 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201056',
        3 => 'PalmOil Produce Inspection Fees',
      ),
      989 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201057',
        3 => 'Pesticides Fumigation Service',
      ),
      990 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201058',
        3 => 'Proceeds From Export Promotion Seminar',
      ),
      991 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201059',
        3 => 'ReCertification Fees For CoOperativeSocieties',
      ),
      992 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201060',
        3 => 'Reg./Renewal Fees For Business Premises',
      ),
      993 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201061',
        3 => 'Regional MarketsApplication/Allocation Fees',
      ),
      994 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201062',
        3 => 'Registration Fees For Business Premises',
      ),
      995 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201063',
        3 => 'Registration Fees For CoOperative Societies',
      ),
      996 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201064',
        3 => 'Registration Of Produce Merchants/Processing Factories',
      ),
      997 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201065',
        3 => 'Renewal Of Business Premises',
      ),
      998 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201066',
        3 => 'Rent From Central Produce Beaches',
      ),
      999 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201067',
        3 => 'Royalties On School Textbooks',
      ),
      1000 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201068',
        3 => 'Rubber Produce Inspection Fees',
      ),
      1001 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201069',
        3 => 'Sale Of 250cc Indigenous Standard',
      ),
      1002 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201070',
        3 => 'Sale Of Adulterated Product',
      ),
      1003 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201071',
        3 => 'Sale Of Application Forms For Small Scale Ind.',
      ),
      1004 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201072',
        3 => 'Sale Of AudioVisal Aids Products',
      ),
      1005 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201073',
        3 => 'Sale Of CoOperative Directory',
      ),
      1006 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201074',
        3 => 'Sale Of CoOperative Field Workers Manuals',
      ),
      1007 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201075',
        3 => 'Sale Of Industrial ProductsHandcrafts',
      ),
      1008 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201076',
        3 => 'Sale Of Old Newspapers',
      ),
      1009 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201077',
        3 => 'Registration/Licensing Of Sellers Of Pest Chemicals And Applianc',
      ),
      1010 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201078',
        3 => 'Sale Of Rotten,Stale Or Bad Product',
      ),
      1011 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201079',
        3 => 'Sale Of Trade Publications',
      ),
      1012 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201080',
        3 => 'Sale Of Uncovered Bread',
      ),
      1013 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201081',
        3 => 'Sale/Display/Distribution Of Contraband',
      ),
      1014 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201082',
        3 => 'Short Charging Of Customer/Client',
      ),
      1015 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201083',
        3 => 'Statutory Enquiry Fee',
      ),
      1016 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201084',
        3 => 'Tender Fees',
      ),
      1017 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201085',
        3 => 'Trade Fair',
      ),
      1018 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201086',
        3 => 'Trade Fair Proceeds',
      ),
      1019 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201087',
        3 => 'Use Of Unapproved Equipment',
      ),
      1020 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201088',
        3 => 'Timber And Allied Market Market Naze',
      ),
      1021 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201089',
        3 => 'Building Material Market Orlu',
      ),
      1022 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201090',
        3 => 'Electrical & Electronics Market Orlu',
      ),
      1023 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201091',
        3 => 'Registration/Licensing Of Stores And Store Keepers',
      ),
      1024 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201092',
        3 => 'Registration/Licensing Of Pest Control Operators',
      ),
      1025 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201093',
        3 => 'Relief Market Umuowa',
      ),
      1026 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201094',
        3 => 'Mgidi Mordern Market',
      ),
      1027 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201095',
        3 => 'Imo Rescue Market Umungwa',
      ),
      1028 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201096',
        3 => 'Old Onitsha Park Shopping Mall Orlu',
      ),
      1029 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201097',
        3 => 'Store Licensing Of Store Keeper',
      ),
      1030 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201098',
        3 => 'Palm Produce License',
      ),
      1031 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201099',
        3 => 'Affiliation Of Contractors',
      ),
      1032 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201100',
        3 => 'Sale Of Govt.Properties',
      ),
      1033 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201101',
        3 => 'Sale Of Reg. Forms For Artisians',
      ),
      1034 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201102',
        3 => 'License Renewal Fees',
      ),
      1035 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201103',
        3 => 'Facility Maint.For Artisians',
      ),
      1036 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201104',
        3 => 'Processing Fee For Matching Fund',
      ),
      1037 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201105',
        3 => 'Search Fees',
      ),
      1038 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201106',
        3 => 'Allocation Fees On Naze Industrial Cluster',
      ),
      1039 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201107',
        3 => 'Express Beach (Rent) Community Purchase Fees',
      ),
      1040 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201108',
        3 => 'Non Refundable Application Fee For Avu Mechanic Village',
      ),
      1041 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201109',
        3 => 'Non Refundable Application Fee For Plant,Heavy Engine Inspection',
      ),
      1042 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201110',
        3 => 'ImoChina Investment And Trade Centre  Registration Fee',
      ),
      1043 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201111 ',
        3 => 'ImoChina Investment And Trade CentreVerification Fee ',
      ),
      1044 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201112 ',
        3 => 'ImoChina Investment And Trade CentreRenewal Fee',
      ),
      1045 => 
      array (
        0 => '18001001',
        1 => 'Ministry Of Commerce And Industry',
        2 => '18001001-12201113',
        3 => 'ImoChina Investment And Trade CentreIndustrial Development Lev',
      ),
      1046 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501001',
        3 => '5% Wht On Contracts',
      ),
      1047 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501002',
        3 => 'AgroMetro: Sale Of Data',
      ),
      1048 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501003',
        3 => 'Cattle Tax',
      ),
      1049 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501004',
        3 => 'Cold Room License',
      ),
      1050 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501005',
        3 => 'Contractors Affiliation Fee',
      ),
      1051 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501006',
        3 => 'Dogs Tax',
      ),
      1052 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501007',
        3 => 'Dugout Licences',
      ),
      1053 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501008',
        3 => 'Earnings From Acharubo Farm Settlement',
      ),
      1054 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501009',
        3 => 'Engr. Condemned Stares',
      ),
      1055 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501010',
        3 => 'Engr. Hire Of Tractor, Equip And Transport',
      ),
      1056 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501011',
        3 => 'Engr. Plan Printing',
      ),
      1057 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501012',
        3 => 'Engr.Repair Of Vehicles And Agric Machinery',
      ),
      1058 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501013',
        3 => 'Fish Inspection Fees',
      ),
      1059 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501014',
        3 => 'Fish Pond Inspection Fees',
      ),
      1060 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501015',
        3 => 'Fisherman Licences',
      ),
      1061 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501016',
        3 => 'Fishing Equipment Licenses',
      ),
      1062 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501017',
        3 => 'Forest Offences',
      ),
      1063 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501018',
        3 => 'Hatcheries',
      ),
      1064 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501019',
        3 => 'Home Economic Sale Of Pastries & Sundry',
      ),
      1065 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501020',
        3 => 'Horse Tax',
      ),
      1066 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501021',
        3 => 'Imo Demonstration Farm License',
      ),
      1067 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501022',
        3 => 'Kayaking License',
      ),
      1068 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501023',
        3 => 'LivestockSale Of Breeding Stock',
      ),
      1069 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501024',
        3 => 'Machinery License Renewal',
      ),
      1070 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501025',
        3 => 'Meat Inspection Fees',
      ),
      1071 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501026',
        3 => 'OthersFresh Fruits Bunch',
      ),
      1072 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501027',
        3 => 'Poultry',
      ),
      1073 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501028',
        3 => 'Produce Tax',
      ),
      1074 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501029',
        3 => 'Produce/Vertinary Fees',
      ),
      1075 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501030',
        3 => 'Promoters Licences',
      ),
      1076 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501031',
        3 => 'Registration Of Butchers',
      ),
      1077 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501032',
        3 => 'Registration Of Commercial Farmers',
      ),
      1078 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501033',
        3 => 'Registration Of Feed Miller',
      ),
      1079 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501034',
        3 => 'Registration Of Fish Farms/Hatcheries',
      ),
      1080 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501035',
        3 => 'Registration Of Fish Marketer',
      ),
      1081 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501036',
        3 => 'Registration Of Homestead Of Fish Ponds',
      ),
      1082 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501037',
        3 => 'Registration Of Piggeries',
      ),
      1083 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501038',
        3 => 'Registration Of Poultries',
      ),
      1084 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501039',
        3 => 'Registration Of Poultry Farmers',
      ),
      1085 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501040',
        3 => 'Registration Of Poultrys And Hatcheries',
      ),
      1086 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501041',
        3 => 'Registration Of Private Slaughter Houses',
      ),
      1087 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501042',
        3 => 'Registration Of Private Verterinary Clinics',
      ),
      1088 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501043',
        3 => 'Rent On Government Properties',
      ),
      1089 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501044',
        3 => 'Revenue From Staff Quarters',
      ),
      1090 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501045',
        3 => 'Sale Of AgroSilviculture',
      ),
      1091 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501046',
        3 => 'Sale Of Eggs',
      ),
      1092 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501047',
        3 => 'Sale Of Farm Tools And Planting Material',
      ),
      1093 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501048',
        3 => 'Sale Of Fish',
      ),
      1094 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501049',
        3 => 'Sale Of Forest Produce',
      ),
      1095 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501050',
        3 => 'Sale Of Horticultural Planting Materials',
      ),
      1096 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501051',
        3 => 'Sale Of Indigenous Fruit Tress',
      ),
      1097 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501052',
        3 => 'Sale Of Livestock Product',
      ),
      1098 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501053',
        3 => 'Sale Of Milled Rice',
      ),
      1099 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501054',
        3 => 'Sale Of Old Newpapers',
      ),
      1100 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501055',
        3 => 'Sale Of Pest Control Chemicals/Applications',
      ),
      1101 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501056',
        3 => 'Sale Of Publications',
      ),
      1102 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501057',
        3 => 'Sale Of Small Holders Oil Palm Seedlings',
      ),
      1103 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501058',
        3 => 'Sale Of Staple Food Items',
      ),
      1104 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501059',
        3 => 'Sale Of Timber From Govt. Land',
      ),
      1105 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501060',
        3 => 'Sale Of Trade Publication',
      ),
      1106 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501061',
        3 => 'Sale Of Tree Crop Materials',
      ),
      1107 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501062',
        3 => 'Sale Of Tree Crop Seedlings',
      ),
      1108 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501063',
        3 => 'Sheep/Goat Tax',
      ),
      1109 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501064',
        3 => 'Sport Fishery Fees',
      ),
      1110 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501065',
        3 => 'Survey Charges',
      ),
      1111 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501066',
        3 => 'Verterinary Cattle Latrage',
      ),
      1112 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501067',
        3 => 'Vetenary Drug Licences',
      ),
      1113 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501068',
        3 => 'Vetenary Licences',
      ),
      1114 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501069',
        3 => 'VeterinaryPoultry Sales',
      ),
      1115 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501070',
        3 => 'VeterinarySale Of Livestock Products',
      ),
      1116 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501071',
        3 => 'Veterinary Clinic, Treatment Fees',
      ),
      1117 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501072',
        3 => 'Veterinary Prophylactic Treatment',
      ),
      1118 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501073',
        3 => 'Veterinary: Sale Of Livestock Products',
      ),
      1119 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501074',
        3 => 'Zoo Fees',
      ),
      1120 => 
      array (
        0 => '31001001',
        1 => 'Ministry Of Agriculture & Natural Resources',
        2 => '31001001-13501075',
        3 => '10% Wht Consultants',
      ),
      1121 => 
      array (
        0 => '84001001',
        1 => 'Ministry Of Culture And Creative Arts',
        2 => '84001001-12101000',
        3 => 'Registration Of Cultural Groups',
      ),
      1122 => 
      array (
        0 => '84001001',
        1 => 'Ministry Of Culture And Creative Arts',
        2 => '84001001-12101001',
        3 => 'Sale Of Ahiajoku Lecture Publication',
      ),
      1123 => 
      array (
        0 => '84001001',
        1 => 'Ministry Of Culture And Creative Arts',
        2 => '84001001-12101002',
        3 => 'Sales Of Ahiajoku Colloquim',
      ),
      1124 => 
      array (
        0 => '84001001',
        1 => 'Ministry Of Culture And Creative Arts',
        2 => '84001001-12101003',
        3 => 'Renewal Of Cultural Groups',
      ),
      1125 => 
      array (
        0 => '84001001',
        1 => 'Ministry Of Culture And Creative Arts',
        2 => '84001001-12101004',
        3 => 'Imo Creative Artists Website/Directory',
      ),
      1126 => 
      array (
        0 => '84001001',
        1 => 'Ministry Of Culture And Creative Arts',
        2 => '84001001-12101005',
        3 => 'Creative Arts/Artists Exhibition/Trade Fair',
      ),
      1127 => 
      array (
        0 => '84001001',
        1 => 'Ministry Of Culture And Creative Arts',
        2 => '84001001-12101006',
        3 => 'Registration Of Cinemas/Theatres',
      ),
      1128 => 
      array (
        0 => '84001001',
        1 => 'Ministry Of Culture And Creative Arts',
        2 => '84001001-12101007',
        3 => 'Registration For The Talent Hunt Show/Program',
      ),
      1129 => 
      array (
        0 => '84001001',
        1 => 'Ministry Of Culture And Creative Arts',
        2 => '84001001-12101008',
        3 => 'Imo State Museum Centers, Yet To Be Established',
      ),
      1130 => 
      array (
        0 => '84001001',
        1 => 'Ministry Of Culture And Creative Arts',
        2 => '84001001-12101009',
        3 => 'Registration Of Heritage Sites, Yet To Be Commenced',
      ),
      1131 => 
      array (
        0 => '72001001',
        1 => 'Ministry Of Enterprenuership And Skill Development',
        2 => '72001001-12101772',
        3 => 'Workshop And Training',
      ),
      1132 => 
      array (
        0 => '72001001',
        1 => 'Ministry Of Enterprenuership And Skill Development',
        2 => '72001001-12101772',
        3 => ' Owerri Workshop And Trainingpos Online',
      ),
      1133 => 
      array (
        0 => '72001001',
        1 => 'Ministry Of Enterprenuership And Skill Development',
        2 => '72001001-12101773',
        3 => 'Levies For Artisans',
      ),
      1134 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101700',
        3 => 'Application Fee For New Hotel',
      ),
      1135 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101701',
        3 => 'Inspection Fee For New Hotel',
      ),
      1136 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101702',
        3 => 'Registration Fee For New Hotel',
      ),
      1137 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101703',
        3 => 'Renewal Fee For New Hotel Pos Online',
      ),
      1138 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101704',
        3 => 'Application Fee For Entertainment Center (Lounge Bar )',
      ),
      1139 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101705',
        3 => 'Inspection Fee For Entertainment Center (Lounge Bar)',
      ),
      1140 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101706',
        3 => 'Registration Fee For Entertainmner Center (Lounge Bar)',
      ),
      1141 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101707',
        3 => 'Renewal Fee For Entertainment Center (Lounge Bar)',
      ),
      1142 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101708',
        3 => 'Application Fee For Event Center',
      ),
      1143 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101709',
        3 => 'Inspection Fee For Event Center',
      ),
      1144 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101710',
        3 => 'Registration Fee For Event Center',
      ),
      1145 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101711',
        3 => 'Renewal For Event Center',
      ),
      1146 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101712',
        3 => 'Lease Rent Of Imo Concorde Hotel And Casino',
      ),
      1147 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101713',
        3 => 'Lease Rent Of Imo Hotel Okigwe',
      ),
      1148 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101714',
        3 => 'Lease Rent Of Oguta Lake Resort',
      ),
      1149 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101715',
        3 => 'Lease Rent Of Gulf Course Oguta',
      ),
      1150 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101716',
        3 => 'Lease Rent Of Conference Hall Oguta',
      ),
      1151 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101717',
        3 => 'Lease Rent Of Children\'s Park',
      ),
      1152 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101718',
        3 => 'Recertification Of New Hotel',
      ),
      1153 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101719',
        3 => 'Hotel Operational Permit Owerri Metropolis',
      ),
      1154 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101720',
        3 => 'Hotel Operational Permit Owerri/Okigwe/Orlu',
      ),
      1155 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101721',
        3 => 'Application Fee For New Motels',
      ),
      1156 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101722',
        3 => 'Inspection Fee For New Motels',
      ),
      1157 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101723',
        3 => 'Registration Fee For New Motels',
      ),
      1158 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101724',
        3 => 'Operational Permit Fee For New Motels',
      ),
      1159 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101725',
        3 => 'Renwal Fee For Motel',
      ),
      1160 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101726',
        3 => 'Application Fee For Urban Guest House',
      ),
      1161 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101727',
        3 => 'Inspection Fee For Urban Guest House',
      ),
      1162 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101728',
        3 => 'Registration Fee For Urban Guest House',
      ),
      1163 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101729',
        3 => 'Operational Permit For Urban Guest House',
      ),
      1164 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101730',
        3 => 'Renewal Fee For Urban Guest House',
      ),
      1165 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101731',
        3 => 'Application Fee For Rural Guest House',
      ),
      1166 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101732',
        3 => 'Inspection Fee For Rural Guest House',
      ),
      1167 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101733',
        3 => 'Registration Fee For Rural Guest House',
      ),
      1168 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101734',
        3 => 'Operational Permit For Rural Guest House',
      ),
      1169 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101735',
        3 => 'Renewal Fee For Rural Guest House',
      ),
      1170 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101736',
        3 => 'Application/Recertification Fee For Eateries (Big)',
      ),
      1171 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101737',
        3 => 'Registration Fee For Eateries (Big)',
      ),
      1172 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101738',
        3 => 'Inspection Fee For Eateries (Big)',
      ),
      1173 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101739',
        3 => 'Operational Permit Fee For Eateries (Big) Pos Online',
      ),
      1174 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101740',
        3 => 'Renewal Fee For Eateries (Big)',
      ),
      1175 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101741',
        3 => 'Application/Recertification Fee For Eateries (Small)',
      ),
      1176 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101742',
        3 => 'Registration Fee For Eateries (Small)',
      ),
      1177 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101743',
        3 => 'Inspection Fee For Eateries (Small)',
      ),
      1178 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101744',
        3 => 'Operational Permit For Eateries (Small)',
      ),
      1179 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101745',
        3 => 'Renewal Fee For Eateries (Small)',
      ),
      1180 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101746',
        3 => 'Application/Recertification Fee For Nite Club',
      ),
      1181 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101747',
        3 => 'Inspection Fee For Nite Club',
      ),
      1182 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101748',
        3 => 'Registration Fee For Nite Club',
      ),
      1183 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101749',
        3 => 'Operational Permit For Nite Club',
      ),
      1184 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101750',
        3 => 'Renewal Fee For Nite Club',
      ),
      1185 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101751',
        3 => 'Application/Recertification Fee For Travel And Tours Establishment',
      ),
      1186 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101752',
        3 => 'Registration Fee For Travel And Tour Establishment',
      ),
      1187 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101753',
        3 => 'Inspection Fee For Travel And Tours Establishement',
      ),
      1188 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101754',
        3 => 'Operational Permit For Travel And Tours Establishment',
      ),
      1189 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101755',
        3 => 'Renewal Fee For Travel And Tours Estblishment',
      ),
      1190 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101756',
        3 => 'Application Fee For Cinema',
      ),
      1191 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101757',
        3 => 'Registration Fee For Cinema',
      ),
      1192 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101758',
        3 => 'Inspection Fee For Cinema',
      ),
      1193 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101759',
        3 => 'Operational Permit For Cinema',
      ),
      1194 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101760',
        3 => 'Renewal Fee For Cinema',
      ),
      1195 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101761',
        3 => 'Application Fee For Amusement Park',
      ),
      1196 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101762',
        3 => 'Inspection Fee For Amusement Park',
      ),
      1197 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101763',
        3 => 'Registration Fee For Amusement Park',
      ),
      1198 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101764',
        3 => 'Operational Fee For Amusement Park',
      ),
      1199 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101765',
        3 => 'Renewal Fee For Amusement Park',
      ),
      1200 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101766',
        3 => 'Recertification Fee For Existing Hotel',
      ),
      1201 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101767',
        3 => 'Fees From Visit To Z+C47oological And Botanical Garden For Children',
      ),
      1202 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101768',
        3 => 'Fee From Visit To Zoological And Botanical Garden By Adult',
      ),
      1203 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101769',
        3 => 'Proceed From Imo Carnival',
      ),
      1204 => 
      array (
        0 => '69001001',
        1 => 'Ministry Of Tourism',
        2 => '69001001-12101770',
        3 => 'Occupancy And Consumption Tax',
      ),
      1205 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101404',
        3 => 'S Star Hotels',
      ),
      1206 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101405',
        3 => '3 Star Hotels',
      ),
      1207 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101406',
        3 => 'Hotel 30 Rooms',
      ),
      1208 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101407',
        3 => 'Hotels (130) Rooms',
      ),
      1209 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101408',
        3 => 'Hotels (110) Rooms',
      ),
      1210 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101409',
        3 => 'Banks (Commercial Merchants) Branch',
      ),
      1211 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101410',
        3 => 'Community Micro Finance Bank',
      ),
      1212 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101411',
        3 => 'Central Bank',
      ),
      1213 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101412',
        3 => 'Regional Bank Office',
      ),
      1214 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101413',
        3 => 'Finance Insurance Investment Companies',
      ),
      1215 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101414',
        3 => 'Strategic / Multinational Company (Breweries)',
      ),
      1216 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101415',
        3 => 'Major Construction Companies',
      ),
      1217 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101416',
        3 => 'Other Construction Companies',
      ),
      1218 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101417',
        3 => 'Manufacturing Companies (Large)',
      ),
      1219 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101418',
        3 => 'Manufacturing Companies (Medium)',
      ),
      1220 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101419',
        3 => 'Manufacturing Companies (Small)',
      ),
      1221 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101420',
        3 => 'Oil Marketing Companies (Area And Branch)',
      ),
      1222 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101421',
        3 => 'Computer Company Firms (Big)',
      ),
      1223 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101422',
        3 => 'Computer Company Firms (Small)',
      ),
      1224 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101423',
        3 => 'Security Agencies',
      ),
      1225 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101424',
        3 => 'Interior Decorators / Furniture',
      ),
      1226 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101425',
        3 => 'Interior Decorators / Furniture Companies (Medium)',
      ),
      1227 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101426',
        3 => 'Interior Decorators / Furniture',
      ),
      1228 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101427',
        3 => 'Airlines',
      ),
      1229 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101428',
        3 => 'Courier Service / Travel Agents',
      ),
      1230 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101429',
        3 => 'Clearing Agents',
      ),
      1231 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101430',
        3 => 'Passengers Transport (Large)',
      ),
      1232 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101431',
        3 => 'Passengers Transport (Small)',
      ),
      1233 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101432',
        3 => 'Haulage Contractors/ Trailers',
      ),
      1234 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101433',
        3 => 'Heavy Plant Hirers (Large)',
      ),
      1235 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101434',
        3 => 'Heavy Plant Hirers (Small)',
      ),
      1236 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101435',
        3 => 'Motor Dealers Tokumbo (Small)',
      ),
      1237 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101436',
        3 => 'Filling Station (3 Pumps And Above)',
      ),
      1238 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101437',
        3 => 'Filling Station (12 Pumps)',
      ),
      1239 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101438',
        3 => 'General Merchants / Distributors (Large)',
      ),
      1240 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101439',
        3 => 'General Merchants / Distributors (Small)',
      ),
      1241 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101440',
        3 => 'Department Store (Large)',
      ),
      1242 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101441',
        3 => 'Major Distribution/ Deparment Companies',
      ),
      1243 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101442',
        3 => 'Supermarket/Store (Large)',
      ),
      1244 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101443',
        3 => 'Supermarket/Store (Small)',
      ),
      1245 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101444',
        3 => 'Department Store (Big)',
      ),
      1246 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101445',
        3 => 'Bookshop/Stationery Store (Large)',
      ),
      1247 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101446',
        3 => 'Bookshop/Stationery Store (Small)',
      ),
      1248 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101447',
        3 => 'Patent Medcine/Provision Store (Big)',
      ),
      1249 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101448',
        3 => 'Patent Medcine/Provision Store (Medium)',
      ),
      1250 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101449',
        3 => 'Patent Medcine/Provision Store ( Small)',
      ),
      1251 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101450',
        3 => 'Pharmacies/Chemist (Large)',
      ),
      1252 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101451',
        3 => 'Pharmacies/Chemist (Medium)',
      ),
      1253 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101452',
        3 => 'Pahremacies/Chemist (Small)',
      ),
      1254 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101453',
        3 => 'Private Hospitals, Clinics Maternity (Above 50 Beds)',
      ),
      1255 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101454',
        3 => 'Private Hospitals, Clinics Maternity (Above 3050 Beds)',
      ),
      1256 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101455',
        3 => 'Private Hospitals, Clinics Maternity (Above 30 Beds)',
      ),
      1257 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101456',
        3 => 'Private Hospitals, Clinics Matetrnity (Above 110 Beds)',
      ),
      1258 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101457',
        3 => 'Optical Service',
      ),
      1259 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101458',
        3 => 'Residential Houses (Per Flat)',
      ),
      1260 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101459',
        3 => 'Bungalows',
      ),
      1261 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101460',
        3 => 'Duplex',
      ),
      1262 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101461',
        3 => 'Self Contain',
      ),
      1263 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101462',
        3 => 'Semi Detached Duplex',
      ),
      1264 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101463',
        3 => 'Hostel (46 Rooms)',
      ),
      1265 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101464',
        3 => 'Oprptalmological Service',
      ),
      1266 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101465',
        3 => 'Dental Clinics',
      ),
      1267 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101466',
        3 => 'Physiotherapy',
      ),
      1268 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101467',
        3 => 'Acupuncture',
      ),
      1269 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101468',
        3 => 'Embalment Centres',
      ),
      1270 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101469',
        3 => 'Nutritional Unit/Food Supplement (Retailers) Small',
      ),
      1271 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101470',
        3 => 'Nutritional Unit/Food Supplement And Chemical Distributors',
      ),
      1272 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101471',
        3 => 'Nutritional Unit/Food Supplement Zonal Headquarters',
      ),
      1273 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101472',
        3 => 'Health Farm/Food Supplement',
      ),
      1274 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101473',
        3 => 'Bakeries/Confectioneries (Large)',
      ),
      1275 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101474',
        3 => 'Bakeries/Confectioneries (Small)',
      ),
      1276 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101475',
        3 => 'Block Industries (Large)',
      ),
      1277 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101476',
        3 => 'Block Indutries (Small)',
      ),
      1278 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101477',
        3 => 'Building Materials Dealers (Large)',
      ),
      1279 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101478',
        3 => 'Building Materials Dealers (Medium)',
      ),
      1280 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101479',
        3 => 'Building Materials Dealers (Small)',
      ),
      1281 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101480',
        3 => 'Beer/Spirit Wholesale (Big)',
      ),
      1282 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101481',
        3 => 'Beer/Spirit Wholesale (Medium)',
      ),
      1283 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101482',
        3 => 'Beer/Spirit Wholesale (Small)',
      ),
      1284 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101483',
        3 => 'Beer/Spirit Retailer (Big)',
      ),
      1285 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101484',
        3 => 'Beer/Spirit Retailer (Small)',
      ),
      1286 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101485',
        3 => 'Electronics/Gas Dealers (Large)',
      ),
      1287 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101486',
        3 => 'Electronics/Gas Dealers (Medium)',
      ),
      1288 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101487',
        3 => 'Electronics/Gas Dealers (Small)',
      ),
      1289 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101488',
        3 => 'Vehicle Spare Parts Dealer (Big)',
      ),
      1290 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101489',
        3 => 'Vehicle Spare Parts Dealer (Medium)',
      ),
      1291 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101490',
        3 => 'Vehicle Spare Parts Dealer (Small)',
      ),
      1292 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101491',
        3 => 'Licensed Armed Dealers',
      ),
      1293 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101492',
        3 => 'Sawmills/Timber Dealers',
      ),
      1294 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101493',
        3 => 'Scrap Metal Dealers',
      ),
      1295 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101494',
        3 => 'Laundries/Dry Cleaners (Big)',
      ),
      1296 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101495',
        3 => 'Laundries/Dry Cleaners (Medium)',
      ),
      1297 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101496',
        3 => 'Laundries/Dry Cleaners (Small)',
      ),
      1298 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101497',
        3 => 'Merchandized/Plantation Farms (Big)',
      ),
      1299 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101498',
        3 => 'Merchandized/Plantation Farms (Small)',
      ),
      1300 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101499',
        3 => 'Secondary/Primary Nursery Schools (Private)',
      ),
      1301 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101500',
        3 => 'Primary/Nursery Schools (Private)',
      ),
      1302 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101501',
        3 => 'Nursery Schools (Private)',
      ),
      1303 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101502',
        3 => 'Day Care Ceners (Private)',
      ),
      1304 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101503',
        3 => 'Gaming/Casino Centers (Private)',
      ),
      1305 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101504',
        3 => 'Pool Agents/Betting/Games (Medium)',
      ),
      1306 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101505',
        3 => 'Pool Agents (Small)',
      ),
      1307 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101506',
        3 => 'Mechanics/Welders/Auto Electrical',
      ),
      1308 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101507',
        3 => 'Artisians Etc (Small)',
      ),
      1309 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101508',
        3 => 'Publishers',
      ),
      1310 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101509',
        3 => 'Printers (Large)',
      ),
      1311 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101510',
        3 => 'Printers (Medium)',
      ),
      1312 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101511',
        3 => 'Printers (Small)',
      ),
      1313 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101512',
        3 => 'Restaurant With International Menu',
      ),
      1314 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101513',
        3 => 'Restaurant (Large)',
      ),
      1315 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101514',
        3 => 'Restaurant (Small)',
      ),
      1316 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101515',
        3 => 'Canteens/Snack Bar',
      ),
      1317 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101516',
        3 => 'Eating Houses/Shanty',
      ),
      1318 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101517',
        3 => 'Cinema/Night Clubs (Big)',
      ),
      1319 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101518',
        3 => 'Cinema/Night Clubs (Medium)',
      ),
      1320 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101519',
        3 => 'Cinema/Night Clubs (Small)',
      ),
      1321 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101520',
        3 => 'Professional Lawyers, Architects, Accountants, Engineers',
      ),
      1322 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101521',
        3 => 'MultiPractioners, SolePractitioners',
      ),
      1323 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101522',
        3 => 'Fashion Designers/Saloon/Tailor (Large)',
      ),
      1324 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101523',
        3 => 'Business/Vocational Centers/Secretarial Institute (Medium)',
      ),
      1325 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101524',
        3 => 'Business/Vocational Centers/Secretarial Institute (Small)',
      ),
      1326 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101525',
        3 => 'Petty Traders',
      ),
      1327 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101526',
        3 => 'Gsm Friendship Centers (Mtn, Glo, Airtel, Zoom)',
      ),
      1328 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101527',
        3 => 'Palm Kernel Mills (Big)',
      ),
      1329 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101528',
        3 => 'Palm Kernel Mills (Small)',
      ),
      1330 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101529',
        3 => 'Refrigerator/Tv/Radio/Electronic Repairs',
      ),
      1331 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101530',
        3 => 'Gsm /Phones Accessories',
      ),
      1332 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101531',
        3 => 'Rental Services',
      ),
      1333 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101532',
        3 => 'Sales Of Aluminum',
      ),
      1334 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101533',
        3 => 'Barbing Saloon',
      ),
      1335 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101534',
        3 => 'Sshoe Making/Bag Repair',
      ),
      1336 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101535',
        3 => 'Sales Of Cosmetic/ Attachment',
      ),
      1337 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101536',
        3 => 'Textiles/ Ladys Hat (Big)',
      ),
      1338 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101537',
        3 => 'Textiles/ Ladys Hat (Small)',
      ),
      1339 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101538',
        3 => 'Phone Call',
      ),
      1340 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101539',
        3 => 'Heavy Duty Equipment',
      ),
      1341 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101540',
        3 => 'Livestock Feeds/ Vet Services',
      ),
      1342 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101541',
        3 => 'Road Hawking Of Industrial Products',
      ),
      1343 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101542',
        3 => 'Art Gallery/Workshop',
      ),
      1344 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101543',
        3 => 'Agro Services/Chemical',
      ),
      1345 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101544',
        3 => 'Pure Water Distributors/Large Wholesale',
      ),
      1346 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101545',
        3 => 'Arch Welding Workshop/Showroom',
      ),
      1347 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101546',
        3 => 'Grinding Mills For Soft Grains/Fruits',
      ),
      1348 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101547',
        3 => 'Grinding Mills (Large)',
      ),
      1349 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101548',
        3 => 'Exam Refining Plant/Gas Refilling Plant',
      ),
      1350 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101549',
        3 => 'Exam Preparatory/ExtraMoral Studies Centres',
      ),
      1351 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101550',
        3 => 'Private Tertiary Institution',
      ),
      1352 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101551',
        3 => 'Water Boreholes (Above 3 Channels)',
      ),
      1353 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101552',
        3 => 'Water Boreholes (13 Channels)',
      ),
      1354 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101553',
        3 => 'Car Wash (Small)',
      ),
      1355 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101554',
        3 => 'Bush Bar (Large)',
      ),
      1356 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101555',
        3 => 'Bush Bar (Medium)',
      ),
      1357 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101556',
        3 => 'Bush Bar (Small)',
      ),
      1358 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101557',
        3 => 'Bridal/Rental Service (Big)',
      ),
      1359 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101558',
        3 => 'Bridal/Rental Service (Small)',
      ),
      1360 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101559',
        3 => 'Sales Of Other (Abada Etc)',
      ),
      1361 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101560',
        3 => 'Hiring Of Other Equipment (Heavy Duty)',
      ),
      1362 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101561',
        3 => 'Hiring Of Other Equipment (Heavy Duty)',
      ),
      1363 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101562',
        3 => 'Phone/Network/Communication Business Outfit (Large)',
      ),
      1364 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101563',
        3 => 'Phone/Network/Communication Business Outfit (Medium)',
      ),
      1365 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101564',
        3 => 'Phone/Network/Communication Business Outfit (Small)',
      ),
      1366 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101565',
        3 => 'Hostel(612 Rooms)',
      ),
      1367 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101566',
        3 => 'Hostel (1240)',
      ),
      1368 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101567',
        3 => 'Fashion Designers/Saloon/Tailor(Medium)',
      ),
      1369 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101568',
        3 => 'Recording/Music Studio (Waxing Store)',
      ),
      1370 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101569',
        3 => 'Second Hand Cloth/Bags/Shoes/ (Small)',
      ),
      1371 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101570',
        3 => 'Metal/Steel Fabrication (Underground Tank Constructions)',
      ),
      1372 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101571',
        3 => 'Pension Administations/Health Administrators',
      ),
      1373 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101572',
        3 => 'Spiritualist/Sacremental Religious Articles',
      ),
      1374 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101573',
        3 => 'Spiritualist/Sacremental Religious Articles (Small)',
      ),
      1375 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101574',
        3 => 'Surface Tank Kerosense Sales',
      ),
      1376 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101575',
        3 => 'Cyber Caf�/Ict Internet Outfits (Above 10 Computers)',
      ),
      1377 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101576',
        3 => 'Cyber Caf�/Ict Internet Outfits (610 Computers)',
      ),
      1378 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101577',
        3 => 'Cyber Caf�/Ict Internet Outfits (Less Than 6 Computers)',
      ),
      1379 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101578',
        3 => 'Sales Of Electronic Materials (Large)',
      ),
      1380 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101579',
        3 => 'Sales Of Electronic Materials (Medium)',
      ),
      1381 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101580',
        3 => 'Sales Of Electronic Materials (Small)',
      ),
      1382 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101581',
        3 => 'Pure Water Distributors/Large Wholesale',
      ),
      1383 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101582',
        3 => 'Tailoring Materials (Big)',
      ),
      1384 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101583',
        3 => 'Tailoring Materials (Medium)',
      ),
      1385 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101584',
        3 => 'Fridge/Air Conditioners/Plumbing Accessories',
      ),
      1386 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101585',
        3 => 'Boutiques/Shoes/Babies/Fancy (Large)',
      ),
      1387 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101586',
        3 => 'Boutiques/Shoes/Babies/Fancy (Medium)',
      ),
      1388 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101587',
        3 => 'Boutiques/Shoes/Babies/Fancy (Small)',
      ),
      1389 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101588',
        3 => 'Record Stores/Video/Clubs/Photography (Small)',
      ),
      1390 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101589',
        3 => 'Mechanical/Foundries Tools/Sewage Disposal (Large)',
      ),
      1391 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101590',
        3 => 'Mechanical/Foundries Tools/Sewage Disposal (Medium)',
      ),
      1392 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101591',
        3 => 'Mechanical/Foundries Tools/Sewage Disposal (Small)',
      ),
      1393 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101592',
        3 => 'Herbalist/Spiritualist/Traditionals/Native Doctor',
      ),
      1394 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101593',
        3 => 'Business/Vocational Centers/Secretarial Institute (Large)',
      ),
      1395 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101594',
        3 => 'Casket Making Workshop',
      ),
      1396 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101595',
        3 => 'Vulcanizes/Battery Charges/Motorcycle/Bicycle Repairs',
      ),
      1397 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101596',
        3 => 'Motocycle/Bicycle Spare Parts Dealers',
      ),
      1398 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101597',
        3 => 'Colour Labs/Processing Centers',
      ),
      1399 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101598',
        3 => 'Garri/Corn Processing Centers',
      ),
      1400 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101599',
        3 => 'Builders Of Motor Vehicle Bodies',
      ),
      1401 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101600',
        3 => 'Aluminium Fillings, Frames Etc',
      ),
      1402 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101601',
        3 => 'Aluminium Fabrications (Big)',
      ),
      1403 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101602',
        3 => 'Aluminium Fabrications (Small)',
      ),
      1404 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101603',
        3 => 'Metal Fabrication And Construction (Large)',
      ),
      1405 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101604',
        3 => 'Metal Fabrication And Construction (Small)',
      ),
      1406 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101605',
        3 => 'Plumbing/Fridge/Air Conditions Accessories',
      ),
      1407 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101606',
        3 => 'Junkyard (Bottle Dealers)',
      ),
      1408 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101607',
        3 => 'Borehole/Water Distribution To Tankers (Big)',
      ),
      1409 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101608',
        3 => 'Borehole/Water Distribution To Tankers (Small)',
      ),
      1410 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101609',
        3 => 'Cold Houses (Big)',
      ),
      1411 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101610',
        3 => 'Cold Houses (Small)',
      ),
      1412 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101611',
        3 => 'Cold Room Shop/Meat Shop (Large)',
      ),
      1413 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101612',
        3 => 'Cold Room Shop/Meat Shop (Small With One Fridge)',
      ),
      1414 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101613',
        3 => 'Private Garage (Large)',
      ),
      1415 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101614',
        3 => 'Private Garage (Small)',
      ),
      1416 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101615',
        3 => 'Horticulture/Sales Of Plants Flower/Seeding (Large)',
      ),
      1417 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101616',
        3 => 'Horticulture/Sales Of Plants Flower/Seeding (Small)',
      ),
      1418 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101617',
        3 => 'Motor License/Emblem Agent',
      ),
      1419 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101618',
        3 => 'Sales Of Pipe Bore/Wall Water',
      ),
      1420 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101619',
        3 => 'Car Wash Service Provider (Large)',
      ),
      1421 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101620',
        3 => 'Car Wash Service Provider (Small)',
      ),
      1422 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101621',
        3 => 'Second Hand Cloth/Bags/Shoes/ (Large)',
      ),
      1423 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101622',
        3 => 'Second Hand Cloth/Bags/Shoes/ (Medium)',
      ),
      1424 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101623',
        3 => 'Bottled/Sachet Water (Whole Sale)',
      ),
      1425 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101624',
        3 => 'Bottled/Sachet Water (Retailers)',
      ),
      1426 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101625',
        3 => 'Private Cable Tv Dealers',
      ),
      1427 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101626',
        3 => 'Private Cable Radio Station (Small)',
      ),
      1428 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101627',
        3 => 'Private Cable Radio Station (Large)',
      ),
      1429 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101628',
        3 => 'Private Airlines Booking Office (Big)',
      ),
      1430 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101629',
        3 => 'Private Airlines Booking Office (Small)',
      ),
      1431 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101630',
        3 => 'Sales Of Plastic Materials (Big)',
      ),
      1432 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101631',
        3 => 'Sales Of Plastic Materials (Small)',
      ),
      1433 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101632',
        3 => 'Foodstuff ShopSales In Bags (Large)',
      ),
      1434 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101633',
        3 => 'Foodstuff/Plastic (Big)',
      ),
      1435 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101634',
        3 => 'Foodstuff/Plastic (Small)',
      ),
      1436 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101635',
        3 => 'Consultancy Service Office (Big)',
      ),
      1437 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101636',
        3 => 'Consultancy Service Office (Medium)',
      ),
      1438 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101637',
        3 => 'Consultancy Service Office (Small)',
      ),
      1439 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101638',
        3 => 'Warehouse/Storage Stall (Large)',
      ),
      1440 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101639',
        3 => 'Warehouse/Storage Stall (Medium)',
      ),
      1441 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101640',
        3 => 'Warehouse/Storage Stall(Medium)',
      ),
      1442 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101641',
        3 => 'Glass Shop/Workshop Stall (Big)',
      ),
      1443 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101642',
        3 => 'Glass Shop/Workshop Stall (Small)',
      ),
      1444 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101643',
        3 => 'Gift Shop (Big)',
      ),
      1445 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101644',
        3 => 'Gift Shop (Small)',
      ),
      1446 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101645',
        3 => 'Amusement Park (Big)',
      ),
      1447 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101646',
        3 => 'Amusement Park(Small)',
      ),
      1448 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101647',
        3 => 'Casket Show Room',
      ),
      1449 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101648',
        3 => 'Fairly Used Cars Dealers',
      ),
      1450 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101649',
        3 => 'Roofing Sheet Industry (Big)',
      ),
      1451 => 
      array (
        0 => '66001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101650',
        3 => 'Roofing Sheet Industry (Small)',
      ),
      1452 => 
      array (
        0 => '55001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101651',
        3 => 'Computer Game',
      ),
      1453 => 
      array (
        0 => '55001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101652',
        3 => 'Waste Bin Bucket',
      ),
      1454 => 
      array (
        0 => '55001001',
        1 => 'Ministry Of Sanitation And Hygiene',
        2 => '66001001-12101653',
        3 => 'Waste Bin Bag',
      ),
      1455 => 
      array (
        0 => '55001001',
        1 => 'Ministry Of Science And Technology',
        2 => '55001001-25501001',
        3 => '5% Wht On Contracts',
      ),
      1456 => 
      array (
        0 => '55001001',
        1 => 'Ministry Of Science And Technology',
        2 => '55001001-25501002',
        3 => '10% Tax On Consultants',
      ),
      1457 => 
      array (
        0 => '55001001',
        1 => 'Ministry Of Science And Technology',
        2 => '55001001-25501003',
        3 => 'Registration Fee For New Computer/Ict Centre',
      ),
      1458 => 
      array (
        0 => '55001001',
        1 => 'Ministry Of Science And Technology',
        2 => '55001001-25501004',
        3 => 'Ict Operational Permit',
      ),
      1459 => 
      array (
        0 => '55001001',
        1 => 'Ministry Of Science And Technology',
        2 => '55001001-25501005',
        3 => 'Tender Fees',
      ),
      1460 => 
      array (
        0 => '55001001',
        1 => 'Ministry Of Science And Technology',
        2 => '55001001-25501006',
        3 => 'Fines And Penalties',
      ),
      1461 => 
      array (
        0 => '55001001',
        1 => 'Ministry Of Science And Technology',
        2 => '55001001-25501007',
        3 => 'Miscellaneous Fees',
      ),
      1462 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Science And Technology',
        2 => '55001001-25501008',
        3 => 'Application Form For Establishment Of Ict Centre',
      ),
      1463 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Science And Technology',
        2 => '55001001-25501009',
        3 => 'Approval Fee For Computer Ict/Cbt Centre',
      ),
      1464 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Science And Technology',
        2 => '55001001-25501010',
        3 => 'Renewal Fee For Computer/Ict Centre',
      ),
      1465 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021001',
        3 => 'Veterinary Clinic Treatment Fees',
      ),
      1466 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021002',
        3 => 'Veterinary Prophylactic Treatment',
      ),
      1467 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021003',
        3 => 'Meat Inspection Fees',
      ),
      1468 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021004',
        3 => 'Fish Pound Inspection Fees',
      ),
      1469 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021005',
        3 => 'Sport Fishery Fees',
      ),
      1470 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021006',
        3 => 'Registration Of Butchers',
      ),
      1471 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021007',
        3 => 'Registration Of Private Slaughter Houses',
      ),
      1472 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021008',
        3 => 'Registration Of Fish Farms/Hatcheries',
      ),
      1473 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021009',
        3 => 'Registration Of Homestead Fish Pond',
      ),
      1474 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021010',
        3 => 'Registration Of Fish Marketer',
      ),
      1475 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021011',
        3 => 'Fish Inspection Fees',
      ),
      1476 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021012',
        3 => 'Registration Of Feed Millers',
      ),
      1477 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021013',
        3 => 'Registration Of Piggeries',
      ),
      1478 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021014',
        3 => 'Registration Of Poulteries',
      ),
      1479 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021015',
        3 => 'Registration Of Poultry Hatcheries',
      ),
      1480 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021016',
        3 => 'Vetrinary Cattle Lairage',
      ),
      1481 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021017',
        3 => 'Registration Of Private Vetrinary Clinic',
      ),
      1482 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021018',
        3 => 'Renewal Of Feed Millers',
      ),
      1483 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021019',
        3 => 'Quarantaine Services',
      ),
      1484 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021020',
        3 => 'Inspection Of Abattoir',
      ),
      1485 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04021021',
        3 => 'Regional/Cattle Markets Application Fees',
      ),
      1486 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04041022',
        3 => 'Sales Of Eggs',
      ),
      1487 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04041023',
        3 => 'Sales Of Fish',
      ),
      1488 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04041024',
        3 => 'Meat Sales',
      ),
      1489 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04041025',
        3 => 'Sales Of Livestock Feeds',
      ),
      1490 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04041026',
        3 => 'Vetrinary Sales Of Livestock Products',
      ),
      1491 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04041027',
        3 => 'Poultry Sales',
      ),
      1492 => 
      array (
        0 => '53001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04041028',
        3 => 'Livestock Sales Of Breeding Stock','30001002'
      ),
      1493 => 
      array (
        0 => '30001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04041029',
        3 => 'Sales Of Livestock',
      ),
      1494 => 
      array (
        0 => '30001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04041030',
        3 => 'Proceed From Avutu Poultry',
      ),
      1495 => 
      array (
        0 => '30001002',
        1 => 'Ministry Of Live Stock',
        2 => '53001002-04041031',
        3 => 'Sales Of Culled Livestock Poultry Product',
      ),
      1496 => 
      array (
        0 => '30001002',
        1 => 'Ministry Of Petroleum Resources',
        2 => '30001002-13411001',
        3 => 'Registration Fee',
      ),
      1497 => 
      array (
        0 => '30001002',
        1 => 'Ministry Of Petroleum Resources',
        2 => '30001002-13411002',
        3 => 'Operational Permit',
      ),
      1498 => 
      array (
        0 => '30001002',
        1 => 'Ministry Of Petroleum Resources',
        2 => '30001002-13411003',
        3 => 'Petroleum Product Safety Fee (Downstream)',
      ),
      1499 => 
      array (
        0 => '30001002',
        1 => 'Ministry Of Petroleum Resources',
        2 => '30001002-13411004',
        3 => ' Petroleum Products Loading Fee',
      ),
      1500 => 
      array (
        0 => '30001002',
        1 => 'Ministry Of Petroleum Resources',
        2 => '30001002-13411005',
        3 => 'Petroleum Safety Fee',
      ),
      1501 => 
      array (
        0 => '30001002',
        1 => 'Ministry Of Petroleum Resources',
        2 => '30001002-13411006',
        3 => ' Fines And Penalties',
      ),
      1502 => 
      array (
        0 => '30001002',
        1 => 'Ministry Of Petroleum Resources',
        2 => '30001002-13411007',
        3 => ' Miscellaneous Fees',
      )
    );
    
    foreach($arrays as $key => $array){
      if($key > 0){
        
        // return $array[0];
        $mda_id = ImoMda::where('default_itemcode',$array[0])->first()->id;
        
        ImoService::create([
          'mda_id' => $mda_id,
          'item_code' => $array[2],
          'name' => $array[3]
        ]);
      }
    }

  }
   


}
