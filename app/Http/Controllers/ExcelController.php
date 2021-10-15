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
    $arrays = 
    array (
      0 => 
      array (
        'Category Code' => '12081001',
        'Category Name' => 'Ministry Of Youths And Social Development',
        'Revenue Code' => '16001001-12081001',
        'Revenue Name' => 'Other Fees',
      ),
      1 => 
      array (
        'Category Code' => '12081001',
        'Category Name' => 'Ministry Of Youths And Social Development',
        'Revenue Code' => '16001001-12081002',
        'Revenue Name' => 'Proceeds Fees',
      ),
      2 => 
      array (
        'Category Code' => '12081001',
        'Category Name' => 'Ministry Of Youths And Social Development',
        'Revenue Code' => '16001001-12081003',
        'Revenue Name' => 'Proceeds From Sales, Youth Week Emblem',
      ),
      3 => 
      array (
        'Category Code' => '12081001',
        'Category Name' => 'Ministry Of Youths And Social Development',
        'Revenue Code' => '16001001-12081004',
        'Revenue Name' => 'Reg. Of Youth Organisations',
      ),
      4 => 
      array (
        'Category Code' => '12081001',
        'Category Name' => 'Ministry Of Youths And Social Development',
        'Revenue Code' => '16001001-12081005',
        'Revenue Name' => 'Registration Of Youth Organizations',
      ),
      5 => 
      array (
        'Category Code' => '12081001',
        'Category Name' => 'Ministry Of Youths And Social Development',
        'Revenue Code' => '16001001-12081006',
        'Revenue Name' => 'Renewal Of Reg. Of Youth Organizations',
      ),
      6 => 
      array (
        'Category Code' => '12081001',
        'Category Name' => 'Ministry Of Youths And Social Development',
        'Revenue Code' => '16001001-12081007',
        'Revenue Name' => 'Sale Of Old Newspapers',
      ),
      7 => 
      array (
        'Category Code' => '12081001',
        'Category Name' => 'Ministry Of Youths And Social Development',
        'Revenue Code' => '16001001-12081008',
        'Revenue Name' => 'Sale Of Youth Organization Emblem',
      ),
      8 => 
      array (
        'Category Code' => '12081001',
        'Category Name' => 'Ministry Of Youths And Social Development',
        'Revenue Code' => '16001001-12081009',
        'Revenue Name' => 'Tender Fees',
      ),
      9 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301139',
        'Revenue Name' => 'Enumeration, Revalidation And Recertification',
      ),
      10 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301001',
        'Revenue Name' => 'Basic Education Certificates Exam',
      ),
      11 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301002',
        'Revenue Name' => 'Seminar W/Shops For Profession Of Nursery Schools',
      ),
      12 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301003',
        'Revenue Name' => '10% Wht On Consultants',
      ),
      13 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301004',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      14 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301005',
        'Revenue Name' => 'Appl. Fees For Estab. Of New Prof. Inst.',
      ),
      15 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301006',
        'Revenue Name' => 'Appl. Fees For Estab. Of Nursery Schools',
      ),
      16 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301007',
        'Revenue Name' => 'Appl. Fees For Estab. Of Prim. Schools',
      ),
      17 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301008',
        'Revenue Name' => 'Appl. Fees For Estab. Of Sec. Schools',
      ),
      18 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301009',
        'Revenue Name' => 'Application Fee (Registration)',
      ),
      19 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301010',
        'Revenue Name' => 'Application Fee (Renewal)',
      ),
      20 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301011',
        'Revenue Name' => 'Application FeesEstablishment Of Private Vocational Schools',
      ),
      21 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301012',
        'Revenue Name' => 'Application FeesEstablishment Of Nursery Schools',
      ),
      22 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301013',
        'Revenue Name' => 'Application Fees For Establishment Of New Prof. Institution',
      ),
      23 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301014',
        'Revenue Name' => 'Application For The Establishment Of New Private Sec School',
      ),
      24 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301015',
        'Revenue Name' => 'Application For The Establishment Of Private Primary School',
      ),
      25 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301016',
        'Revenue Name' => 'Application Form',
      ),
      26 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301017',
        'Revenue Name' => 'Approval FeeAddition Of Pry Six',
      ),
      27 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301018',
        'Revenue Name' => 'Approval Fee (Registration)',
      ),
      28 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301019',
        'Revenue Name' => 'Approval Fee (Renewal)',
      ),
      29 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301020',
        'Revenue Name' => 'Approval FeeAddition Of Pry Six',
      ),
      30 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301021',
        'Revenue Name' => 'Approval Inspection Of Grading Of Sec. Sch. Status',
      ),
      31 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301022',
        'Revenue Name' => 'AudioVisual AidsSale Of Products',
      ),
      32 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301023',
        'Revenue Name' => 'Change Of School Name',
      ),
      33 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301024',
        'Revenue Name' => 'Change Of SchoolIntra State Transfer',
      ),
      34 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301025',
        'Revenue Name' => 'Common Entrance Exam Fees',
      ),
      35 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301026',
        'Revenue Name' => 'Confirmation Of Lost PostWar Certificate',
      ),
      36 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301027',
        'Revenue Name' => 'Contract Worth 2million And 5million (Registration)',
      ),
      37 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301028',
        'Revenue Name' => 'Contract Worth 2million And 5million (Renewal)',
      ),
      38 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301029',
        'Revenue Name' => 'Contract Worth 2million And Below (Registration)',
      ),
      39 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301030',
        'Revenue Name' => 'Contract Worth 2million And Below (Renewal)',
      ),
      40 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301031',
        'Revenue Name' => 'Contract Worth 5million And 10million (Registration)',
      ),
      41 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301032',
        'Revenue Name' => 'Contract Worth 5million And 10million (Renewal)',
      ),
      42 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301033',
        'Revenue Name' => 'Exam Approval Insp. Fees For Private Schools',
      ),
      43 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301034',
        'Revenue Name' => 'Federal Craft Cert. Exam Fees',
      ),
      44 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301035',
        'Revenue Name' => 'Fslc/Cont. Assess Processing Fees',
      ),
      45 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301036',
        'Revenue Name' => 'Gifted Children Screening',
      ),
      46 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301037',
        'Revenue Name' => 'Hire Of Conference Room',
      ),
      47 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301038',
        'Revenue Name' => 'Inspection Fee (Registration)',
      ),
      48 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301039',
        'Revenue Name' => 'Inspection Fee (Renewal)',
      ),
      49 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301040',
        'Revenue Name' => 'Inspection FeesPrivate Nursery Schools',
      ),
      50 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301041',
        'Revenue Name' => 'Inspection FeesPrivate Primary Schools',
      ),
      51 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301042',
        'Revenue Name' => 'Inspection FeesPrivate Professional Institutes.',
      ),
      52 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301043',
        'Revenue Name' => 'Inspection FeesPrivate Vocational Schools',
      ),
      53 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301044',
        'Revenue Name' => 'Inspection FeesPrivate Secondary Schools',
      ),
      54 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301045',
        'Revenue Name' => 'Inter State Transfer',
      ),
      55 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301046',
        'Revenue Name' => 'Issue Of Post War Piecemeal Tc2 Cert',
      ),
      56 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301047',
        'Revenue Name' => 'Jnr. Voc. Sch. Cert. Resit Exam',
      ),
      57 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301048',
        'Revenue Name' => 'Junior School Certificate Exam Fees',
      ),
      58 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301049',
        'Revenue Name' => 'Junior Schools Cert. Exam Fees',
      ),
      59 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301050',
        'Revenue Name' => 'Other Fees',
      ),
      60 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301051',
        'Revenue Name' => 'Processing Fee (Registration)',
      ),
      61 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301052',
        'Revenue Name' => 'Processing Fee (Renewal)',
      ),
      62 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301053',
        'Revenue Name' => 'Processing Fee For Cert Evaluation',
      ),
      63 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301054',
        'Revenue Name' => 'Processing Fee For Cert. Evaluation O LevelA Level',
      ),
      64 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301055',
        'Revenue Name' => 'Public Health Entrance Examination Fees',
      ),
      65 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301056',
        'Revenue Name' => 'Reg. Of Nursery Schools Operational License',
      ),
      66 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301057',
        'Revenue Name' => 'Reg. Of Private Primary Schools Operational License',
      ),
      67 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301058',
        'Revenue Name' => 'Reg. Of Private Professional Institute Operational License',
      ),
      68 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301059',
        'Revenue Name' => 'Reg. Of Private Secondaryschools Operational License',
      ),
      69 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301060',
        'Revenue Name' => 'Reg. RenewalPrivate Primary Schools Operational License',
      ),
      70 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301061',
        'Revenue Name' => 'Reg. RenewalPrivate Prof. Institute Operational License',
      ),
      71 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301062',
        'Revenue Name' => 'Reg. RenewalPrivate Secondary Schools Operational License',
      ),
      72 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301063',
        'Revenue Name' => 'Reg./Renewal For Operational License',
      ),
      73 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301064',
        'Revenue Name' => 'Reg./Renewal For Operational License',
      ),
      74 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301065',
        'Revenue Name' => 'Registration Of Creche',
      ),
      75 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301066',
        'Revenue Name' => 'Registration Of Day Centres',
      ),
      76 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301067',
        'Revenue Name' => 'Registration Of New Nursery Schools',
      ),
      77 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301068',
        'Revenue Name' => 'Registration Of New Primary Schools',
      ),
      78 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301069',
        'Revenue Name' => 'Registration Of New Private Secondary Schools',
      ),
      79 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301070',
        'Revenue Name' => 'Registration Of Private Prof. Institute',
      ),
      80 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301071',
        'Revenue Name' => 'Registration Of Private Vocational Schools',
      ),
      81 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301072',
        'Revenue Name' => 'Registration Of Private Vocational Schools Operational License',
      ),
      82 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301073',
        'Revenue Name' => 'RenewalPrivate Nursery Schools Operational License',
      ),
      83 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301074',
        'Revenue Name' => 'Renewal Of Creche',
      ),
      84 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301075',
        'Revenue Name' => 'Renewal Of Day Care Center',
      ),
      85 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301076',
        'Revenue Name' => 'Renewal Of Nursery School',
      ),
      86 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301077',
        'Revenue Name' => 'Renewal Of Primary School',
      ),
      87 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301078',
        'Revenue Name' => 'Renewal Of Prof. Institution',
      ),
      88 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301079',
        'Revenue Name' => 'Renewal Of Secondary School',
      ),
      89 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301080',
        'Revenue Name' => 'Renewal Of Secondary School',
      ),
      90 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301081',
        'Revenue Name' => 'Renewal Of Private Vocational Schools Operational License',
      ),
      91 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301082',
        'Revenue Name' => 'Royalties On School Textbooks',
      ),
      92 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301083',
        'Revenue Name' => 'Sale Of Application Forms Into Cont. Education Center',
      ),
      93 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301084',
        'Revenue Name' => 'Sale Of Old Newspapers',
      ),
      94 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301085',
        'Revenue Name' => 'Sale Of Publications',
      ),
      95 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301086',
        'Revenue Name' => 'Sale Of Soup, Snacks, Books & Craft',
      ),
      96 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301087',
        'Revenue Name' => 'School FeeSnr. Secondary School',
      ),
      97 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301088',
        'Revenue Name' => 'Seminar W/Shops For Private Vocational Schools',
      ),
      98 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301089',
        'Revenue Name' => 'Seminar W/Shops For Prof. Of Nursery Schools',
      ),
      99 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301090',
        'Revenue Name' => 'Subject Approval Jsce',
      ),
      100 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301091',
        'Revenue Name' => 'Subject/Exam Approval Inspection Fee',
      ),
      101 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301092',
        'Revenue Name' => 'Teacher Grade I Certificate Exam Fees',
      ),
      102 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301093',
        'Revenue Name' => 'Teacher Grade Ii Certificate Exam Fees',
      ),
      103 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301094',
        'Revenue Name' => 'Tender Fee (Renewal)',
      ),
      104 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301095',
        'Revenue Name' => 'Tender Fees',
      ),
      105 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301096',
        'Revenue Name' => 'Universal Basic EducationAssesment Test',
      ),
      106 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301097',
        'Revenue Name' => 'Upgrading Primary Schools',
      ),
      107 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301098',
        'Revenue Name' => 'Women Education Skills Acquisition',
      ),
      108 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301099',
        'Revenue Name' => 'Reg. RenewalPrivate Nursery Schools Operational License',
      ),
      109 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301100',
        'Revenue Name' => 'Upgrading To Secondary School Inspection Fee',
      ),
      110 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301101',
        'Revenue Name' => 'Tuition',
      ),
      111 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301102',
        'Revenue Name' => 'Consolidated Equipment',
      ),
      112 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301103',
        'Revenue Name' => 'Board Retention',
      ),
      113 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301104',
        'Revenue Name' => 'Pta Welfare',
      ),
      114 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301105',
        'Revenue Name' => 'Security And Centrally Set Paper',
      ),
      115 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301106',
        'Revenue Name' => 'Computer Fees',
      ),
      116 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301107',
        'Revenue Name' => 'Maps And Charts',
      ),
      117 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301108',
        'Revenue Name' => 'Carnivals And Guiness Book',
      ),
      118 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301109',
        'Revenue Name' => 'Sports',
      ),
      119 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301110',
        'Revenue Name' => 'Safe Production',
      ),
      120 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301111',
        'Revenue Name' => 'School Retention',
      ),
      121 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301112',
        'Revenue Name' => 'Exam Scripts',
      ),
      122 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301113',
        'Revenue Name' => 'Set Of Books (R&R)',
      ),
      123 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301114',
        'Revenue Name' => 'Gen Sets Production',
      ),
      124 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301115',
        'Revenue Name' => 'Dossier',
      ),
      125 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301116',
        'Revenue Name' => 'O\' Level & Diploma Degree',
      ),
      126 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301117',
        'Revenue Name' => 'Women Education Skills AcquisitionApplication Form',
      ),
      127 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301118',
        'Revenue Name' => 'Women Education Skills AcquisitionSchool Fee',
      ),
      128 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301119',
        'Revenue Name' => 'Women Education Skills AcquisitionBoarding Fee',
      ),
      129 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301120',
        'Revenue Name' => 'Approval Fee For Professional Institute',
      ),
      130 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301121',
        'Revenue Name' => 'Application Fee For Establishment Of Computer Training (Appreciation Course)',
      ),
      131 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301122',
        'Revenue Name' => 'Registration Of Computer Training (Appreciation ) Institute',
      ),
      132 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301123',
        'Revenue Name' => 'Approval Fee For Computer Training (Appreciation ) Institute',
      ),
      133 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301124',
        'Revenue Name' => 'Renewal Fee For Computer Training (Appreciation ) Institute',
      ),
      134 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301125',
        'Revenue Name' => 'ReInspection For Nursery Schools',
      ),
      135 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301126',
        'Revenue Name' => 'Handling Charges',
      ),
      136 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301127',
        'Revenue Name' => 'ReInspection For Primary Schools',
      ),
      137 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301128',
        'Revenue Name' => 'ReInspection For Secondary Schools',
      ),
      138 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301129',
        'Revenue Name' => 'ReInspection For Private Vocational Schools',
      ),
      139 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301130',
        'Revenue Name' => 'Identification Of Contracts With The Ministry',
      ),
      140 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301131',
        'Revenue Name' => 'Confirmation Of Lost Post War Certificate',
      ),
      141 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301132',
        'Revenue Name' => 'Universal Basic Education Assessment Test (Ubeat)',
      ),
      142 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301133',
        'Revenue Name' => 'Junior School Business/Technical Certificate Examination (Js (B/T) Ce)',
      ),
      143 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301134',
        'Revenue Name' => 'Quality Assurance MonitoringUniversal Basic Education General Placement Tes',
      ),
      144 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301135',
        'Revenue Name' => 'Quality Assurance MonitoringUniversal Basic Education Test Into Model Schoo',
      ),
      145 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301136',
        'Revenue Name' => 'Quality Assurance MonitoringCommon Entrance Examination In Science Schools',
      ),
      146 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301137',
        'Revenue Name' => 'Tender FeeContracts Above N10m',
      ),
      147 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301138',
        'Revenue Name' => 'Book Review',
      ),
      148 => 
      array (
        'Category Code' => '19001001',
        'Category Name' => 'Ministry Of Education',
        'Revenue Code' => '19001001-12301139',
        'Revenue Name' => 'Recertification Of Private Schools',
      ),
      149 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401001',
        'Revenue Name' => 'Application Form For Consultants/Contractor',
      ),
      150 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401002',
        'Revenue Name' => 'Building Inspection Of Health Institution',
      ),
      151 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401003',
        'Revenue Name' => 'Burrow Pits/Sand Mining Sites',
      ),
      152 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401004',
        'Revenue Name' => 'Certification Of Small Sea Food Ind./Enterprises',
      ),
      153 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401005',
        'Revenue Name' => 'Consultancy Fees',
      ),
      154 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401006',
        'Revenue Name' => 'Environment Audit (Ea)',
      ),
      155 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401007',
        'Revenue Name' => 'Environment Impact Assessment Fee',
      ),
      156 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401008',
        'Revenue Name' => 'Industrial Waste Discharge Permit',
      ),
      157 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401009',
        'Revenue Name' => 'Inspection Of Food Handling Environment',
      ),
      158 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401010',
        'Revenue Name' => 'Laboratory Service Fees',
      ),
      159 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401011',
        'Revenue Name' => 'Motor Emblem Pollution Discharge',
      ),
      160 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401012',
        'Revenue Name' => 'Others',
      ),
      161 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401013',
        'Revenue Name' => 'Payments For Permit And Review',
      ),
      162 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401014',
        'Revenue Name' => 'Pollution Fees',
      ),
      163 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401015',
        'Revenue Name' => 'Pollution/Effluent Discharge Fees',
      ),
      164 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401016',
        'Revenue Name' => 'Registration Of Pest Control And Fumigation Services Provide',
      ),
      165 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401017',
        'Revenue Name' => 'Renewal Of Consultants',
      ),
      166 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401018',
        'Revenue Name' => 'Renewal Of Industrial Waste Discharge Permit',
      ),
      167 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401019',
        'Revenue Name' => 'Vetting Of Health Institutions Building Plans To Avoid',
      ),
      168 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401020',
        'Revenue Name' => 'Petrol Stations',
      ),
      169 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401021',
        'Revenue Name' => 'Habitation',
      ),
      170 => 
      array (
        'Category Code' => '30001001',
        'Category Name' => 'Ministry Of Environment',
        'Revenue Code' => '30001001-13401022',
        'Revenue Name' => 'Audit/Emp',
      ),
      171 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401001',
        'Revenue Name' => '10% Wht From Fed. Inland Rev.',
      ),
      172 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401002',
        'Revenue Name' => '10% Wht On Consultants',
      ),
      173 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401003',
        'Revenue Name' => '13% Deprivation Fund',
      ),
      174 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401004',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      175 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401005',
        'Revenue Name' => 'Afribank Plc',
      ),
      176 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401006',
        'Revenue Name' => 'Alex Industry Plc',
      ),
      177 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401007',
        'Revenue Name' => 'Anambra Motor Manufacturing Company (Avam)',
      ),
      178 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401008',
        'Revenue Name' => 'Anamco',
      ),
      179 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401009',
        'Revenue Name' => 'Arrears Of Statutory Allocation For Ecological Problems',
      ),
      180 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401010',
        'Revenue Name' => 'Auac',
      ),
      181 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401011',
        'Revenue Name' => 'Cadbury Plc',
      ),
      182 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401012',
        'Revenue Name' => 'Capital Hotel Plc',
      ),
      183 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401013',
        'Revenue Name' => 'Directorship Fees Paid To Public Offices',
      ),
      184 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401014',
        'Revenue Name' => 'Div. Received From Govt. Investments.',
      ),
      185 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401015',
        'Revenue Name' => 'Dividend Recorved From Govt',
      ),
      186 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401016',
        'Revenue Name' => 'Due Dilgence Fee',
      ),
      187 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401017',
        'Revenue Name' => 'Ecological Fund',
      ),
      188 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401018',
        'Revenue Name' => 'Emenite Limited',
      ),
      189 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401019',
        'Revenue Name' => 'Evans Medical Ltd',
      ),
      190 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401020',
        'Revenue Name' => 'Excess Crude Fund',
      ),
      191 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401021',
        'Revenue Name' => 'First Aluminium Co (Nig) Limited',
      ),
      192 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401022',
        'Revenue Name' => 'First Aluminium Product Ltd',
      ),
      193 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401023',
        'Revenue Name' => 'General Cotton Mills Ltd',
      ),
      194 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401024',
        'Revenue Name' => 'Guiness Nigeria Plc',
      ),
      195 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401025',
        'Revenue Name' => 'Hire Of Computer Time',
      ),
      196 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401026',
        'Revenue Name' => 'Hire Of Conference RoomTraining Hall',
      ),
      197 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401027',
        'Revenue Name' => 'Hire Of Government Vehicles',
      ),
      198 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401028',
        'Revenue Name' => 'Imo Concorde Hotel',
      ),
      199 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401029',
        'Revenue Name' => 'Imo Marketing Company Ltd',
      ),
      200 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401030',
        'Revenue Name' => 'Imo Municipal Transport',
      ),
      201 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401031',
        'Revenue Name' => 'Imo Regional Cattle Market',
      ),
      202 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401032',
        'Revenue Name' => 'Imo Rubber Estate Co. Ltd',
      ),
      203 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401033',
        'Revenue Name' => 'Imo Transport Company (Itc)',
      ),
      204 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401034',
        'Revenue Name' => 'Intercontinental Bank Plc',
      ),
      205 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401035',
        'Revenue Name' => 'Money Lender Licenses',
      ),
      206 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401036',
        'Revenue Name' => 'Nalmerchant Bank Plc',
      ),
      207 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401037',
        'Revenue Name' => 'Nddc Refund',
      ),
      208 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401038',
        'Revenue Name' => 'Nestle Foods Nigeria Plc',
      ),
      209 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401039',
        'Revenue Name' => 'Nigeria Breweries Plc',
      ),
      210 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401040',
        'Revenue Name' => 'Oando Nigeria Plc',
      ),
      211 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401041',
        'Revenue Name' => 'Other Fees',
      ),
      212 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401042',
        'Revenue Name' => 'Reimbursement From Agro Nova',
      ),
      213 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401043',
        'Revenue Name' => 'Reimbursement From Education Rate Fund Acct',
      ),
      214 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401044',
        'Revenue Name' => 'Reimbursement From Nddc',
      ),
      215 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401045',
        'Revenue Name' => 'Reinbursement From Education Rate Fund Acct.',
      ),
      216 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401046',
        'Revenue Name' => 'Rural Electrification Refund',
      ),
      217 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401047',
        'Revenue Name' => 'Sale Of Old Newspapers',
      ),
      218 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401048',
        'Revenue Name' => 'Sale Of Statistical Publications',
      ),
      219 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401049',
        'Revenue Name' => 'Standard Trust Bank Plc',
      ),
      220 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401050',
        'Revenue Name' => 'Statutory Allocation For Ecological Problems',
      ),
      221 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401051',
        'Revenue Name' => 'Stautory Allocation From Federations',
      ),
      222 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401052',
        'Revenue Name' => 'Tender Fees',
      ),
      223 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401053',
        'Revenue Name' => 'Transfer Of Bond Interest',
      ),
      224 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401054',
        'Revenue Name' => 'Trust Securities',
      ),
      225 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401055',
        'Revenue Name' => 'Unclassified',
      ),
      226 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401056',
        'Revenue Name' => 'Union Bank Plc',
      ),
      227 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401057',
        'Revenue Name' => 'United Africa Company (Uac)',
      ),
      228 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401058',
        'Revenue Name' => 'UnUtilized Bonds',
      ),
      229 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401059',
        'Revenue Name' => 'Value Added Tax (Vat)',
      ),
      230 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401060',
        'Revenue Name' => 'West Minister Dredging (Nig) Ltd',
      ),
      231 => 
      array (
        'Category Code' => '20001001',
        'Category Name' => 'Ministry Of Finance',
        'Revenue Code' => '20001001-12401061',
        'Revenue Name' => 'Zenith Bank Plc',
      ),
      232 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501001',
        'Revenue Name' => 'Registration Of New Health Institutions',
      ),
      233 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501002',
        'Revenue Name' => 'Acceptance FeesSchool Of Nursing',
      ),
      234 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501003',
        'Revenue Name' => 'Accommodation Fees School Of Health Technology',
      ),
      235 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501004',
        'Revenue Name' => 'Application Fees For Post Basic Midwifery Courses',
      ),
      236 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501005',
        'Revenue Name' => 'Cont. Lic',
      ),
      237 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501006',
        'Revenue Name' => 'Continuing Education For Nurses',
      ),
      238 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501007',
        'Revenue Name' => 'Deductions From Lga And Isopadec',
      ),
      239 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501008',
        'Revenue Name' => 'Fees For Application Forms For Estab. Of Health Institutes',
      ),
      240 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501009',
        'Revenue Name' => 'Fees For Inoculations',
      ),
      241 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501010',
        'Revenue Name' => 'Fees For International Inoculations (Yellow Card)',
      ),
      242 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501011',
        'Revenue Name' => 'Food Vendors Licences',
      ),
      243 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501012',
        'Revenue Name' => 'Forms For Renewal Of Patent & Proprietry Med. & Venors Licen',
      ),
      244 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501013',
        'Revenue Name' => 'Fumigation Of Homes & Premises',
      ),
      245 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501014',
        'Revenue Name' => 'Hire Of Govt. Vehicles (Ambulance)',
      ),
      246 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501015',
        'Revenue Name' => 'Hostel Fees For Accom Of Trainee Nurses',
      ),
      247 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501016',
        'Revenue Name' => 'Inspection Fees For Reg.Of New Health Institutions',
      ),
      248 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501017',
        'Revenue Name' => 'Nursery/Midwifery Entrance Exam Fees',
      ),
      249 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501018',
        'Revenue Name' => 'Other Fees',
      ),
      250 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501019',
        'Revenue Name' => 'Patent & Proprietary Vendor Licences',
      ),
      251 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501020',
        'Revenue Name' => 'Pest/Vendor Control Services Licences',
      ),
      252 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501021',
        'Revenue Name' => 'Public Health Entrance Exam Fess',
      ),
      253 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501022',
        'Revenue Name' => 'Public Health Lab. Fees',
      ),
      254 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501023',
        'Revenue Name' => 'Reg. Of Traditional Medicine Clinics',
      ),
      255 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501024',
        'Revenue Name' => 'Reg. Of Vector Control Services',
      ),
      256 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501025',
        'Revenue Name' => 'Reg./Renewal For Operational License',
      ),
      257 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501026',
        'Revenue Name' => 'Registration Fees (For Use Of Library)',
      ),
      258 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501027',
        'Revenue Name' => 'Registration Of New Health Institutions',
      ),
      259 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501028',
        'Revenue Name' => 'Registration Of Trado Medical',
      ),
      260 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501029',
        'Revenue Name' => 'Renewal Of Health Institutions',
      ),
      261 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501030',
        'Revenue Name' => 'Renewal Of Patent & Proprietary Vendor Licences',
      ),
      262 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501031',
        'Revenue Name' => 'Renewal Of Vectors Control Services',
      ),
      263 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501032',
        'Revenue Name' => 'Sale Of Appl. Forms Pest/Vector Cont. Lic.',
      ),
      264 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501033',
        'Revenue Name' => 'Sale Of Application Forms For Patent & Proprietaty License',
      ),
      265 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501034',
        'Revenue Name' => 'Sale Of Old Newspapers',
      ),
      266 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501035',
        'Revenue Name' => 'School FeesSchool Of Health Technology',
      ),
      267 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501036',
        'Revenue Name' => 'School FeesSchool Of Nursing',
      ),
      268 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501037',
        'Revenue Name' => 'School FeesSchool Of Public Health Nursing',
      ),
      269 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501038',
        'Revenue Name' => 'State Health',
      ),
      270 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501039',
        'Revenue Name' => 'Tender Fees',
      ),
      271 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501040',
        'Revenue Name' => 'Tuition Fees School Of Midwifery Course',
      ),
      272 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501041',
        'Revenue Name' => 'Hospital Approval Fee',
      ),
      273 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501042',
        'Revenue Name' => '5% Witholding Tax On Contracts',
      ),
      274 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501043',
        'Revenue Name' => '10% Tax On Consultancy',
      ),
      275 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501044',
        'Revenue Name' => 'Renewal Of Food Vendor Licenses',
      ),
      276 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501045',
        'Revenue Name' => 'Acceptance Fee School Of Post Basic Midwifery Awoomamma',
      ),
      277 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501046',
        'Revenue Name' => 'Accommodation Fees School Of Post Basic Midwifery Awoomamma',
      ),
      278 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501047',
        'Revenue Name' => 'Interview',
      ),
      279 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501048',
        'Revenue Name' => 'Approval Fees For Building Plans',
      ),
      280 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501049',
        'Revenue Name' => 'Renewal Of Trado Medical License',
      ),
      281 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501050',
        'Revenue Name' => 'Fees For Location Approval For Pattent And Proprietary Medicine Shops',
      ),
      282 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501051',
        'Revenue Name' => 'Inspection Fee On New Pharmacies Embarkiing On Distribution/Importation',
      ),
      283 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501052',
        'Revenue Name' => 'Inspection Fee On New Pharmacies Embarkiing On Retail Services',
      ),
      284 => 
      array (
        'Category Code' => '21001001',
        'Category Name' => 'Ministry Of Health',
        'Revenue Code' => '21001001-12501053',
        'Revenue Name' => 'Food Inspection',
      ),
      285 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301001',
        'Revenue Name' => 'Printing Of Building Plan',
      ),
      286 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301002',
        'Revenue Name' => 'Rent On Govt Quarters Outside Imo State',
      ),
      287 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301003',
        'Revenue Name' => 'Rent On Junior Staff Quarters',
      ),
      288 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301004',
        'Revenue Name' => 'Rent On Parliament Quarters For Legislature',
      ),
      289 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301005',
        'Revenue Name' => 'Rent On Senior Staff Quarters',
      ),
      290 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301006',
        'Revenue Name' => 'Nekede Exclusive Garden Development Profit',
      ),
      291 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301007',
        'Revenue Name' => 'Sale Of Housing Estate Okporo',
      ),
      292 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301008',
        'Revenue Name' => 'Street Light Ole Advert Fees',
      ),
      293 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301009',
        'Revenue Name' => 'Tender Fees',
      ),
      294 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301010',
        'Revenue Name' => 'Registration Of Developers',
      ),
      295 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301011',
        'Revenue Name' => 'Application Fee To Be A Developer',
      ),
      296 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301012',
        'Revenue Name' => 'Search Fee On Plots',
      ),
      297 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301013',
        'Revenue Name' => 'Fees For Affiliation Of Contractors',
      ),
      298 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301014',
        'Revenue Name' => 'Plans Adoption Fee',
      ),
      299 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301015',
        'Revenue Name' => 'New Estate Agbala Housing Of Estate',
      ),
      300 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301016',
        'Revenue Name' => 'Fencing Fee',
      ),
      301 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301017',
        'Revenue Name' => 'Application Fee For Laying Of Pipes Across The Road',
      ),
      302 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301018',
        'Revenue Name' => 'Approval Of Renovation',
      ),
      303 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301019',
        'Revenue Name' => 'Crossing Pipes With Approval',
      ),
      304 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301020',
        'Revenue Name' => 'House Numbering Fees',
      ),
      305 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301021',
        'Revenue Name' => '10% Wht On Consultants',
      ),
      306 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301022',
        'Revenue Name' => '5% Wht On Contractors',
      ),
      307 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301023',
        'Revenue Name' => 'Current Rent Nekede Exclusive Garden',
      ),
      308 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301024',
        'Revenue Name' => 'Arrears Of Rent',
      ),
      309 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301025',
        'Revenue Name' => 'Nekede Exclusive Garden Lease/Land Value',
      ),
      310 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301026',
        'Revenue Name' => 'Rent Of Community Centre',
      ),
      311 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301027',
        'Revenue Name' => 'Change Of Purpose',
      ),
      312 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301028',
        'Revenue Name' => 'Profit Development Copy (Pdc)',
      ),
      313 => 
      array (
        'Category Code' => '50001001',
        'Category Name' => 'Ministry Of Housing',
        'Revenue Code' => '50001001-15301029',
        'Revenue Name' => 'Certified True Copy (Ctc)',
      ),
      314 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601001',
        'Revenue Name' => '10% Wht On Consultants',
      ),
      315 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601002',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      316 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601003',
        'Revenue Name' => 'Bindind & Rehabilitation Of Books',
      ),
      317 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601004',
        'Revenue Name' => 'Binding Of Printing Materials',
      ),
      318 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601005',
        'Revenue Name' => 'Earning From Imo Newspapers',
      ),
      319 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601006',
        'Revenue Name' => 'Earnings From Plan Printing Machines',
      ),
      320 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601007',
        'Revenue Name' => 'F.O.E Trainee Fees',
      ),
      321 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601008',
        'Revenue Name' => 'Graphic Arts Designs',
      ),
      322 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601009',
        'Revenue Name' => 'Hire Of Films',
      ),
      323 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601010',
        'Revenue Name' => 'Hire Of Public Address System',
      ),
      324 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601011',
        'Revenue Name' => 'Mobile Video Licences',
      ),
      325 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601012',
        'Revenue Name' => 'N.D.E Trainee Fees',
      ),
      326 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601013',
        'Revenue Name' => 'Newspaper Licenses',
      ),
      327 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601014',
        'Revenue Name' => 'Newspaper Vendors Licences',
      ),
      328 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601015',
        'Revenue Name' => 'Office Equipment Repairs',
      ),
      329 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601016',
        'Revenue Name' => 'Other Fees',
      ),
      330 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601017',
        'Revenue Name' => 'Outdoor Advert Fees',
      ),
      331 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601018',
        'Revenue Name' => 'Printing Earnings',
      ),
      332 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601019',
        'Revenue Name' => 'Proceeds From Workshop Products',
      ),
      333 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601020',
        'Revenue Name' => 'Reg. & Renewal Of Social Clubs & Organisations',
      ),
      334 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601021',
        'Revenue Name' => 'Reg. & Renewal Of Stationery Supplies',
      ),
      335 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601022',
        'Revenue Name' => 'Reg. & Renewal Of Supply Of Print Material',
      ),
      336 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601023',
        'Revenue Name' => 'Reg. And Renewal Social Clubs',
      ),
      337 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601024',
        'Revenue Name' => 'Reg. Of Culcural Groups',
      ),
      338 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601025',
        'Revenue Name' => 'Registration Of Newspaper Agents',
      ),
      339 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601026',
        'Revenue Name' => 'Registration Of Private Printers',
      ),
      340 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601027',
        'Revenue Name' => 'Renewal Of Culcural Groups',
      ),
      341 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601028',
        'Revenue Name' => 'Renewal Of Newspaper Vendors Services',
      ),
      342 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601029',
        'Revenue Name' => 'Renewal Reg. Of Newspaper Agents',
      ),
      343 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601030',
        'Revenue Name' => 'Sale Of Diaries & Calendars',
      ),
      344 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601031',
        'Revenue Name' => 'Sale Of Empty Plastic Container & Scraps',
      ),
      345 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601032',
        'Revenue Name' => 'Sale Of Old Newpapers',
      ),
      346 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601033',
        'Revenue Name' => 'Sale Of Photographs',
      ),
      347 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601034',
        'Revenue Name' => 'Sale Of Publication',
      ),
      348 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601035',
        'Revenue Name' => 'Sale Of Youth Magazines',
      ),
      349 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601036',
        'Revenue Name' => 'Searchers Fees',
      ),
      350 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601037',
        'Revenue Name' => 'Signage/Advert Fees',
      ),
      351 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601038',
        'Revenue Name' => 'Stationery Trading Account',
      ),
      352 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601039',
        'Revenue Name' => 'Tender Fees',
      ),
      353 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601040',
        'Revenue Name' => 'Video Recording Duplications',
      ),
      354 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601041',
        'Revenue Name' => 'Video Coverage',
      ),
      355 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601042',
        'Revenue Name' => 'Spotlight On Communities',
      ),
      356 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601043',
        'Revenue Name' => 'Private Radio/T.V Operational Fees',
      ),
      357 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601044',
        'Revenue Name' => 'Licenses Of Film Producers',
      ),
      358 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601045',
        'Revenue Name' => 'Sale Of Government Publications',
      ),
      359 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601046',
        'Revenue Name' => 'Ict Operators Permit',
      ),
      360 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601047',
        'Revenue Name' => 'Library Services',
      ),
      361 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601048',
        'Revenue Name' => 'Production Of Vcd & Dvd Tapes On Major Carnivals In Imo',
      ),
      362 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601049',
        'Revenue Name' => 'Sharpening Of Gillotine Lauge',
      ),
      363 => 
      array (
        'Category Code' => '22001001',
        'Category Name' => 'Ministry Of Information And Strategy',
        'Revenue Code' => '22001001-12601050',
        'Revenue Name' => 'Renewal Of Newspaper Agents',
      ),
      364 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701001',
        'Revenue Name' => 'Certification Fees',
      ),
      365 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701002',
        'Revenue Name' => 'Court Awards',
      ),
      366 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701003',
        'Revenue Name' => 'Estate Admin Fees',
      ),
      367 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701004',
        'Revenue Name' => 'Fiat Fees',
      ),
      368 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701005',
        'Revenue Name' => 'Income From Investments',
      ),
      369 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701006',
        'Revenue Name' => 'Interest On Managed Estates',
      ),
      370 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701007',
        'Revenue Name' => 'Legal Services',
      ),
      371 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701008',
        'Revenue Name' => 'Oath Fees',
      ),
      372 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701009',
        'Revenue Name' => 'Sale Of Customary Court Manual',
      ),
      373 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701010',
        'Revenue Name' => 'Sale Of High Court Rules',
      ),
      374 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701011',
        'Revenue Name' => 'Sale Of Law Reports',
      ),
      375 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701012',
        'Revenue Name' => 'Sale Of Law Reports(19921992)',
      ),
      376 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701013',
        'Revenue Name' => 'Sale Of Law Reports(19932003)',
      ),
      377 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701014',
        'Revenue Name' => 'Sale Of Law Reports(19932003)',
      ),
      378 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701015',
        'Revenue Name' => 'Sale Of Old Newspapers',
      ),
      379 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701016',
        'Revenue Name' => 'Sale Of Revised Laws Of Imo State (P)',
      ),
      380 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701017',
        'Revenue Name' => 'Sale Of Revised Laws Of Imo State Yet To Be Produced In Sale Of Revised Laws',
      ),
      381 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701018',
        'Revenue Name' => 'State Administration Fees',
      ),
      382 => 
      array (
        'Category Code' => '23001001',
        'Category Name' => 'Ministry Of Justice',
        'Revenue Code' => '23001001-12701019',
        'Revenue Name' => 'Trust Fees',
      ),
      383 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801001',
        'Revenue Name' => 'Land Regularization And Certification Of Land/Propertie',
      ),
      384 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801002',
        'Revenue Name' => 'Annual Ground Rent',
      ),
      385 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801003',
        'Revenue Name' => 'Application Fee For Allocation Of State Land',
      ),
      386 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801004',
        'Revenue Name' => 'Application Fee For Building Plan Permit',
      ),
      387 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801005',
        'Revenue Name' => 'Application Fee For Certified True Copy For Certif',
      ),
      388 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801006',
        'Revenue Name' => 'Application Fee For Certified True Copy For Deeds',
      ),
      389 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801007',
        'Revenue Name' => 'Application Fee For Certified True Copy For Land D',
      ),
      390 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801008',
        'Revenue Name' => 'Application Fee For Change Of Purpose Clause',
      ),
      391 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801009',
        'Revenue Name' => 'Application Fee For Charting Of Plot',
      ),
      392 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801010',
        'Revenue Name' => 'Application Fee For Deed Of Assignment',
      ),
      393 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801011',
        'Revenue Name' => 'Application Fee For Deed Of Cancellation',
      ),
      394 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801012',
        'Revenue Name' => 'Application Fee For Deed Of Conveyance',
      ),
      395 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801013',
        'Revenue Name' => 'Application Fee For Deed Of Devolution',
      ),
      396 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801014',
        'Revenue Name' => 'Application Fee For Deed Of Gift',
      ),
      397 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801015',
        'Revenue Name' => 'Application Fee For Deed Of Grant',
      ),
      398 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801016',
        'Revenue Name' => 'Application Fee For Deed Of Lease',
      ),
      399 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801017',
        'Revenue Name' => 'Application Fee For Deed Of Mortgage',
      ),
      400 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801018',
        'Revenue Name' => 'Application Fee For Deed Of Purchase',
      ),
      401 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801019',
        'Revenue Name' => 'Application Fee For Deed Of Rectification',
      ),
      402 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801020',
        'Revenue Name' => 'Application Fee For Deed Of Release',
      ),
      403 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801021',
        'Revenue Name' => 'Application Fee For Deed Of Sale',
      ),
      404 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801022',
        'Revenue Name' => 'Application Fee For Deed Of SubLease',
      ),
      405 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801023',
        'Revenue Name' => 'Application Fee For Deed Of Surrender',
      ),
      406 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801024',
        'Revenue Name' => 'Application Fee For Deed Of Transfer',
      ),
      407 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801025',
        'Revenue Name' => 'Application Fee For Deed Of Variation',
      ),
      408 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801026',
        'Revenue Name' => 'Application Fee For Deed Of Vesting Assent',
      ),
      409 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801027',
        'Revenue Name' => 'Application Fee For Deed Release',
      ),
      410 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801028',
        'Revenue Name' => 'Application Fee For Devolution Order',
      ),
      411 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801029',
        'Revenue Name' => 'Application Fee For Extension Of Offer Of Customar',
      ),
      412 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801030',
        'Revenue Name' => 'Application Fee For Extension Of Offer Of Statutor',
      ),
      413 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801031',
        'Revenue Name' => 'Application Fee For Extension Of Time For Late Reg',
      ),
      414 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801032',
        'Revenue Name' => 'Application Fee For Extension Of Time For Plot Dev',
      ),
      415 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801033',
        'Revenue Name' => 'Application Fee For Extension Of Time For Registra',
      ),
      416 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801034',
        'Revenue Name' => 'Application Fee For Extension Of Time To Perfect D',
      ),
      417 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801035',
        'Revenue Name' => 'Application Fee For Habitation/Occupation Permit',
      ),
      418 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801036',
        'Revenue Name' => 'Application Fee For Layout Variation',
      ),
      419 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801037',
        'Revenue Name' => 'Application Fee For Legal Search',
      ),
      420 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801038',
        'Revenue Name' => 'Application Fee For Letter Of Administration',
      ),
      421 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801039',
        'Revenue Name' => 'Application Fee For Letter Of Exchange',
      ),
      422 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801040',
        'Revenue Name' => 'Application Fee For Lodgement Of Court Judgement',
      ),
      423 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801041',
        'Revenue Name' => 'Application Fee For Plot Extension',
      ),
      424 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801042',
        'Revenue Name' => 'Application Fee For Plot Merger',
      ),
      425 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801043',
        'Revenue Name' => 'Application Fee For Plot SubDivision',
      ),
      426 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801044',
        'Revenue Name' => 'Application Fee For Power Of Attorney',
      ),
      427 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801045',
        'Revenue Name' => 'Application Fee For Recertification Of Statutory T',
      ),
      428 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801046',
        'Revenue Name' => 'Application Fee For Registration Of Caveat',
      ),
      429 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801047',
        'Revenue Name' => 'Application Fee For Registration Of Objection',
      ),
      430 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801048',
        'Revenue Name' => 'Application Fee For Registration Of Private Layout',
      ),
      431 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801049',
        'Revenue Name' => 'Application Fee For Registration Of Private Plot',
      ),
      432 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801050',
        'Revenue Name' => 'Application Fee For ReGrant Of Customary Rights O',
      ),
      433 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801051',
        'Revenue Name' => 'Application Fee For ReGrant Of Statutory Rights O',
      ),
      434 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801052',
        'Revenue Name' => 'Application Fee For Regularisation Of NonStatutor',
      ),
      435 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801053',
        'Revenue Name' => 'Application Fee For ReInstatement Of Revoked Land',
      ),
      436 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801054',
        'Revenue Name' => 'Application Fee For ReIssuance Of Customary Certi',
      ),
      437 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801055',
        'Revenue Name' => 'Application Fee For ReIssuance Of Letter Of Grant',
      ),
      438 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801056',
        'Revenue Name' => 'Application Fee For ReIssuance Of Statutory Certi',
      ),
      439 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801057',
        'Revenue Name' => 'Application Fee For Release/Surrender Of Legal Mor',
      ),
      440 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801058',
        'Revenue Name' => 'Application Fee For Revocation Of Power Of Attorne',
      ),
      441 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801059',
        'Revenue Name' => 'Application Fee For Signing And Stamping Of Extra',
      ),
      442 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801060',
        'Revenue Name' => 'Application Fee For Supplemental Mortgage',
      ),
      443 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801061',
        'Revenue Name' => 'Application Fee For Tenancy Agreement',
      ),
      444 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801062',
        'Revenue Name' => 'Application Fees C Of O',
      ),
      445 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801063',
        'Revenue Name' => 'Application For Layout Variation',
      ),
      446 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801064',
        'Revenue Name' => 'Approval Fee For Building Plan Permit',
      ),
      447 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801065',
        'Revenue Name' => 'Approval Fee For Certified True Copy For Certifica',
      ),
      448 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801066',
        'Revenue Name' => 'Approval Fee For Certified True Copy For Deeds Doc',
      ),
      449 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801067',
        'Revenue Name' => 'Approval Fee For Certified True Copy For Land Docu',
      ),
      450 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801068',
        'Revenue Name' => 'Approval Fee For Change Of Purpose Clause',
      ),
      451 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801069',
        'Revenue Name' => 'Approval Fee For Deed Of Assignment',
      ),
      452 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801070',
        'Revenue Name' => 'Approval Fee For Deed Of Cancellation',
      ),
      453 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801071',
        'Revenue Name' => 'Approval Fee For Deed Of Conveyance',
      ),
      454 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801072',
        'Revenue Name' => 'Approval Fee For Deed Of Devolution',
      ),
      455 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801073',
        'Revenue Name' => 'Approval Fee For Deed Of Gift',
      ),
      456 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801074',
        'Revenue Name' => 'Approval Fee For Deed Of Grant',
      ),
      457 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801075',
        'Revenue Name' => 'Approval Fee For Deed Of Lease',
      ),
      458 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801076',
        'Revenue Name' => 'Approval Fee For Deed Of Mortgage',
      ),
      459 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801077',
        'Revenue Name' => 'Approval Fee For Deed Of Purchase',
      ),
      460 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801078',
        'Revenue Name' => 'Approval Fee For Deed Of Rectification',
      ),
      461 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801079',
        'Revenue Name' => 'Approval Fee For Deed Of Release',
      ),
      462 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801080',
        'Revenue Name' => 'Approval Fee For Deed Of Sale',
      ),
      463 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801081',
        'Revenue Name' => 'Approval Fee For Deed Of SubLease',
      ),
      464 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801082',
        'Revenue Name' => 'Approval Fee For Deed Of Surrender',
      ),
      465 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801083',
        'Revenue Name' => 'Approval Fee For Deed Of Transfer',
      ),
      466 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801084',
        'Revenue Name' => 'Approval Fee For Deed Of Variation',
      ),
      467 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801085',
        'Revenue Name' => 'Approval Fee For Deed Of Vesting Assent',
      ),
      468 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801086',
        'Revenue Name' => 'Approval Fee For Deed Release',
      ),
      469 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801087',
        'Revenue Name' => 'Approval Fee For Devolution Order',
      ),
      470 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801088',
        'Revenue Name' => 'Approval Fee For Extension Of Offer Of Customary R',
      ),
      471 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801089',
        'Revenue Name' => 'Approval Fee For Extension Of Offer Of Statutory R',
      ),
      472 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801090',
        'Revenue Name' => 'Approval Fee For Extension Of Time For Late Regist',
      ),
      473 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801091',
        'Revenue Name' => 'Approval Fee For Extension Of Time For Plot Develo',
      ),
      474 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801092',
        'Revenue Name' => 'Approval Fee For Extension Of Time For Registratio',
      ),
      475 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801093',
        'Revenue Name' => 'Approval Fee For Extension Of Time To Perfect Docu',
      ),
      476 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801094',
        'Revenue Name' => 'Approval Fee For Habitation/Occupation Permit',
      ),
      477 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801095',
        'Revenue Name' => 'Approval Fee For Issuance Of Customary Certificate',
      ),
      478 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801096',
        'Revenue Name' => 'Approval Fee For Issuance Of Statutory Certificate',
      ),
      479 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801097',
        'Revenue Name' => 'Approval Fee For Layout Variation',
      ),
      480 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801098',
        'Revenue Name' => 'Approval Fee For Letter Of Administration',
      ),
      481 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801099',
        'Revenue Name' => 'Approval Fee For Letter Of Exchange',
      ),
      482 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801100',
        'Revenue Name' => 'Approval Fee For Lodgement Of Court Judgement',
      ),
      483 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801101',
        'Revenue Name' => 'Approval Fee For Plan Production',
      ),
      484 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801102',
        'Revenue Name' => 'Approval Fee For Plot Allocation',
      ),
      485 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801103',
        'Revenue Name' => 'Approval Fee For Plot Conversion',
      ),
      486 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801104',
        'Revenue Name' => 'Approval Fee For Plot Extension',
      ),
      487 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801105',
        'Revenue Name' => 'Approval Fee For Plot Merger',
      ),
      488 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801106',
        'Revenue Name' => 'Approval Fee For Plot SubDivision',
      ),
      489 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801107',
        'Revenue Name' => 'Approval Fee For Power Of Attorney',
      ),
      490 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801108',
        'Revenue Name' => 'Approval Fee For Registration Of Caveat',
      ),
      491 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801109',
        'Revenue Name' => 'Approval Fee For Registration Of Private Layout',
      ),
      492 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801110',
        'Revenue Name' => 'Approval Fee For Registration Of Private Plot',
      ),
      493 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801111',
        'Revenue Name' => 'Approval Fee For ReGrant Of Customary Rights Of O',
      ),
      494 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801112',
        'Revenue Name' => 'Approval Fee For ReGrant Of Statutory Rights Of O',
      ),
      495 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801113',
        'Revenue Name' => 'Approval Fee For Regularisation Of NonStatutory T',
      ),
      496 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801114',
        'Revenue Name' => 'Approval Fee For ReInstatement Of Revoked Land',
      ),
      497 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801115',
        'Revenue Name' => 'Approval Fee For ReIssuance Of Customary Certific',
      ),
      498 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801116',
        'Revenue Name' => 'Approval Fee For ReIssuance Of Letter Of Grant',
      ),
      499 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801117',
        'Revenue Name' => 'Approval Fee For ReIssuance Of Statutory Certific',
      ),
      500 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801118',
        'Revenue Name' => 'Approval Fee For Release/Surrender Of Legal Mortga',
      ),
      501 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801119',
        'Revenue Name' => 'Approval Fee For Revocation Of Power Of Attorney',
      ),
      502 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801120',
        'Revenue Name' => 'Approval Fee For Supplemental Mortgage',
      ),
      503 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801121',
        'Revenue Name' => 'Approval Fee For Tenancy Agreement',
      ),
      504 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801122',
        'Revenue Name' => 'Approval For Changing Of Purpose',
      ),
      505 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801123',
        'Revenue Name' => 'Approval For Variation',
      ),
      506 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801124',
        'Revenue Name' => 'Arrears Of State Land Rent',
      ),
      507 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801125',
        'Revenue Name' => 'Arrears Of Survival Levy',
      ),
      508 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801126',
        'Revenue Name' => 'Beancon Replacement Fees',
      ),
      509 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801127',
        'Revenue Name' => 'Capital Gains Tax',
      ),
      510 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801128',
        'Revenue Name' => 'Charting Fees For C Of O',
      ),
      511 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801129',
        'Revenue Name' => 'Consent Fee For Approval Of Deed Of Assignment',
      ),
      512 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801130',
        'Revenue Name' => 'Consent Fee For Approval Of Deed Of SubLease',
      ),
      513 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801131',
        'Revenue Name' => 'Consent Fees For Approval Of Conveyance',
      ),
      514 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801132',
        'Revenue Name' => 'Conveyancing Fee For Building Plan Permit',
      ),
      515 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801133',
        'Revenue Name' => 'Conveyancing Fee For Certified True Copy For Deeds',
      ),
      516 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801134',
        'Revenue Name' => 'Conveyancing Fee For Change Of Purpose',
      ),
      517 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801135',
        'Revenue Name' => 'Conveyancing Fee For Habitation/Occupation Permit',
      ),
      518 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801136',
        'Revenue Name' => 'Conveyancing Fee For Plot Allocation',
      ),
      519 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801137',
        'Revenue Name' => 'Conveyancing Fee For Recertification Of Statutory',
      ),
      520 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801138',
        'Revenue Name' => 'Conveyancing Fee For Registration Of Private Layou',
      ),
      521 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801139',
        'Revenue Name' => 'Conveyancing Fee For Registration Of Private Plot',
      ),
      522 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801140',
        'Revenue Name' => 'Conveyancing Fee For Regularisation Of NonStatuto',
      ),
      523 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801141',
        'Revenue Name' => 'Current Years State Land Rent',
      ),
      524 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801142',
        'Revenue Name' => 'Deed Fees',
      ),
      525 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801143',
        'Revenue Name' => 'Enquires Fees On Layouts',
      ),
      526 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801144',
        'Revenue Name' => 'Fees Allocation Of State Lands',
      ),
      527 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801145',
        'Revenue Name' => 'Fees For Plans Deposit By Land Surveyor',
      ),
      528 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801146',
        'Revenue Name' => 'Fees For Process Application For Filling Station',
      ),
      529 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801147',
        'Revenue Name' => 'Fees For Valuation Of Property',
      ),
      530 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801148',
        'Revenue Name' => 'Handling Charges',
      ),
      531 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801149',
        'Revenue Name' => 'Hire Of Maintenance Equip.',
      ),
      532 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801150',
        'Revenue Name' => 'Hire Of Park/Building Structures',
      ),
      533 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801151',
        'Revenue Name' => 'Inspection Fees For C Of O',
      ),
      534 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801152',
        'Revenue Name' => 'Land Regularization And Certification Of Land/Propert',
      ),
      535 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801153',
        'Revenue Name' => 'Landscaping Services',
      ),
      536 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801154',
        'Revenue Name' => 'Lease Of Open Space',
      ),
      537 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801155',
        'Revenue Name' => 'Lifting Of Survey Plans',
      ),
      538 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801156',
        'Revenue Name' => 'List Records/Administration Fees',
      ),
      539 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801157',
        'Revenue Name' => 'Lost Records/Admin Fees',
      ),
      540 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801158',
        'Revenue Name' => 'Other Fees',
      ),
      541 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801159',
        'Revenue Name' => 'Others (Ground Rent)',
      ),
      542 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801160',
        'Revenue Name' => 'Penalties On Rents Paid In Arrears',
      ),
      543 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801161',
        'Revenue Name' => 'Penalty Fee For Default Of Ground Rent',
      ),
      544 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801162',
        'Revenue Name' => 'Penalty Fee For Default On Payment Of Statutory Fe',
      ),
      545 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801163',
        'Revenue Name' => 'Penalty Fee For Delay To Survey',
      ),
      546 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801164',
        'Revenue Name' => 'Penalty Fee For Land Use Contravention',
      ),
      547 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801165',
        'Revenue Name' => 'Penalty Fee For Late Application For ReGrant',
      ),
      548 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801166',
        'Revenue Name' => 'Penalty Fee For Late Payment Of Statutory Fee',
      ),
      549 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801167',
        'Revenue Name' => 'Penalty Fee For NonDevelopment Of Plot',
      ),
      550 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801168',
        'Revenue Name' => 'Penalty Fee For Penal Rent',
      ),
      551 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801169',
        'Revenue Name' => 'Penalty Fee For Penalty For Building Contravention',
      ),
      552 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801170',
        'Revenue Name' => 'Penalty For Development Without Approval',
      ),
      553 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801171',
        'Revenue Name' => 'Penalty On Rents Paid In Arrears',
      ),
      554 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801172',
        'Revenue Name' => 'Permit Fee For Building Plan Permit',
      ),
      555 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801173',
        'Revenue Name' => 'Permit Fee For Habitation/Occupation Permit',
      ),
      556 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801174',
        'Revenue Name' => 'Permit Fee For Setting Out Permit',
      ),
      557 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801175',
        'Revenue Name' => 'Permit Fee For Stage Completion Permit',
      ),
      558 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801176',
        'Revenue Name' => 'Plot Development Fees',
      ),
      559 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801177',
        'Revenue Name' => 'Plot Development Levy',
      ),
      560 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801178',
        'Revenue Name' => 'Premium On Land',
      ),
      561 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801179',
        'Revenue Name' => 'Prep Of Misc For L/Govt & Communities',
      ),
      562 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801180',
        'Revenue Name' => 'Processing Fee For Online Geospatial Services',
      ),
      563 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801181',
        'Revenue Name' => 'Product Sale Charge For Sale Of Gis Products',
      ),
      564 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801182',
        'Revenue Name' => 'Product Sale Charge For Sale Of Map Products',
      ),
      565 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801183',
        'Revenue Name' => 'Production Charge For Site Plan',
      ),
      566 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801184',
        'Revenue Name' => 'Publication Fees',
      ),
      567 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801185',
        'Revenue Name' => 'Quarry Lease',
      ),
      568 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801186',
        'Revenue Name' => 'Ratification Fees',
      ),
      569 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801187',
        'Revenue Name' => 'ReCertification Of Certicates Of Occupancy (Igis)',
      ),
      570 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801188',
        'Revenue Name' => 'Registration Fee For Deed Of Assignment',
      ),
      571 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801189',
        'Revenue Name' => 'Registration Fee For Deed Of Cancellation',
      ),
      572 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801190',
        'Revenue Name' => 'Registration Fee For Deed Of Conveyance',
      ),
      573 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801191',
        'Revenue Name' => 'Registration Fee For Deed Of Devolution',
      ),
      574 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801192',
        'Revenue Name' => 'Registration Fee For Deed Of Gift',
      ),
      575 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801193',
        'Revenue Name' => 'Registration Fee For Deed Of Grant',
      ),
      576 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801194',
        'Revenue Name' => 'Registration Fee For Deed Of Lease',
      ),
      577 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801195',
        'Revenue Name' => 'Registration Fee For Deed Of Mortgage',
      ),
      578 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801196',
        'Revenue Name' => 'Registration Fee For Deed Of Purchase',
      ),
      579 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801197',
        'Revenue Name' => 'Registration Fee For Deed Of Rectification',
      ),
      580 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801198',
        'Revenue Name' => 'Registration Fee For Deed Of Release',
      ),
      581 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801199',
        'Revenue Name' => 'Registration Fee For Deed Of Sale',
      ),
      582 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801200',
        'Revenue Name' => 'Registration Fee For Deed Of SubLease',
      ),
      583 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801201',
        'Revenue Name' => 'Registration Fee For Deed Of Surrender',
      ),
      584 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801202',
        'Revenue Name' => 'Registration Fee For Deed Of Transfer',
      ),
      585 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801203',
        'Revenue Name' => 'Registration Fee For Deed Of Variation',
      ),
      586 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801204',
        'Revenue Name' => 'Registration Fee For Deed Of Vesting Assent',
      ),
      587 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801205',
        'Revenue Name' => 'Registration Fee For Deed Release',
      ),
      588 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801206',
        'Revenue Name' => 'Registration Fee For Devolution Order',
      ),
      589 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801207',
        'Revenue Name' => 'Registration Fee For Letter Of Administration',
      ),
      590 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801208',
        'Revenue Name' => 'Registration Fee For Letter Of Exchange',
      ),
      591 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801209',
        'Revenue Name' => 'Registration Fee For Lodgement Of Court Judgement',
      ),
      592 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801210',
        'Revenue Name' => 'Registration Fee For Power Of Attorney',
      ),
      593 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801211',
        'Revenue Name' => 'Registration Fee For Registration Of Caveat',
      ),
      594 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801212',
        'Revenue Name' => 'Registration Fee For Release/Surrender Of Legal Mo',
      ),
      595 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801213',
        'Revenue Name' => 'Registration Fee For Revocation Of Power Of Attorn',
      ),
      596 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801214',
        'Revenue Name' => 'Registration Fee For Supplemental Mortgage',
      ),
      597 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801215',
        'Revenue Name' => 'Registration Fee For Tenancy Agreement',
      ),
      598 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801216',
        'Revenue Name' => 'Registration Of Converyances',
      ),
      599 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801217',
        'Revenue Name' => 'Rent On Government Property',
      ),
      600 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801218',
        'Revenue Name' => 'Rent On Govt. Quarters Outside Imo State',
      ),
      601 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801219',
        'Revenue Name' => 'Sale Of Flowers & Plants/Grass',
      ),
      602 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801220',
        'Revenue Name' => 'Sale Of Grass',
      ),
      603 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801221',
        'Revenue Name' => 'Sale Of Layouts & Master Plans',
      ),
      604 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801222',
        'Revenue Name' => 'Sale Of Maps',
      ),
      605 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801223',
        'Revenue Name' => 'Sale Of Old Newspapers',
      ),
      606 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801224',
        'Revenue Name' => 'Sale Of Slabs',
      ),
      607 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801225',
        'Revenue Name' => 'Search Fees',
      ),
      608 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801226',
        'Revenue Name' => 'Service Charge For Spatial Data Repository Service',
      ),
      609 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801227',
        'Revenue Name' => 'Special Maps Survey',
      ),
      610 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801228',
        'Revenue Name' => 'Stamp Duties',
      ),
      611 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801229',
        'Revenue Name' => 'State Share On Land Use Change',
      ),
      612 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801230',
        'Revenue Name' => 'Statutory Fee For Grant Of Rights Of Occupancy (Ap',
      ),
      613 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801231',
        'Revenue Name' => 'Statutory Fee For Grant Of Rights Of Occupancy (Pr',
      ),
      614 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801232',
        'Revenue Name' => 'Statutory Fee For Grant Of Rights Of Occupancy (Pu',
      ),
      615 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801233',
        'Revenue Name' => 'Statutory Fee For Grant Of Rights Of Occupancy (Re',
      ),
      616 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801234',
        'Revenue Name' => 'Statutory Fee For Grant Of Rights Of Occupancy (Si',
      ),
      617 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801235',
        'Revenue Name' => 'Survey Fee For Additional Field Work',
      ),
      618 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801236',
        'Revenue Name' => 'Survey Fee For Establishment Of Beacon',
      ),
      619 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801237',
        'Revenue Name' => 'Survey Fee For Lifting Of Survey Plan',
      ),
      620 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801238',
        'Revenue Name' => 'Survey Fee For Office Work And Processing',
      ),
      621 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801239',
        'Revenue Name' => 'Survey Fee For Plot Identification',
      ),
      622 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801240',
        'Revenue Name' => 'Survey Fee For ReEstablishment Of Beacon',
      ),
      623 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801241',
        'Revenue Name' => 'Survey Fee For Tdp Production',
      ),
      624 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801242',
        'Revenue Name' => 'Survey Fee For Transportation / Logistics Cost',
      ),
      625 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801243',
        'Revenue Name' => 'Survey Fees',
      ),
      626 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801244',
        'Revenue Name' => 'Survey Fees For Plans Deposited By Registration',
      ),
      627 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801245',
        'Revenue Name' => 'Survey Fees Handling Charges',
      ),
      628 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801246',
        'Revenue Name' => 'Temporary Occupation Licences',
      ),
      629 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801247',
        'Revenue Name' => 'Tender Fees',
      ),
      630 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801248',
        'Revenue Name' => 'Transfer Of Ownership',
      ),
      631 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801249',
        'Revenue Name' => 'Use Of Park Facilities & Play Equipment',
      ),
      632 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801250',
        'Revenue Name' => 'Valuation Fee For Compensation',
      ),
      633 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801251',
        'Revenue Name' => 'Valuation Fee For Land Transaction',
      ),
      634 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801252',
        'Revenue Name' => 'Valuation Fee For Land Use Contravention',
      ),
      635 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801253',
        'Revenue Name' => 'Valuation Fee For Occupancy Permit',
      ),
      636 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801254',
        'Revenue Name' => 'Valuation Fee For ReGrant Of Title',
      ),
      637 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801255',
        'Revenue Name' => 'Valuation Fee For Rental Of Government Property',
      ),
      638 => 
      array (
        'Category Code' => '24001001',
        'Category Name' => 'Ministry Of Lands, Survey And Urban Planning',
        'Revenue Code' => '24001001-12801256',
        'Revenue Name' => 'Registration Of C Of O',
      ),
      639 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051001',
        'Revenue Name' => '10% Wht On Consultants',
      ),
      640 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051002',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      641 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051003',
        'Revenue Name' => 'Application FeesCreation Of Autonomous Commu',
      ),
      642 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051004',
        'Revenue Name' => 'Application For Submission Fees',
      ),
      643 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051005',
        'Revenue Name' => 'Certifications Of Documents Of Autonomous Commu',
      ),
      644 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051006',
        'Revenue Name' => 'Certified True Copies Of Documents',
      ),
      645 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051007',
        'Revenue Name' => 'Marriage Ordinance Fees',
      ),
      646 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051008',
        'Revenue Name' => 'Oath Fees',
      ),
      647 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051009',
        'Revenue Name' => 'Petitions',
      ),
      648 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051010',
        'Revenue Name' => 'Recognition Of Traditional Rulers',
      ),
      649 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051011',
        'Revenue Name' => 'RegistrationNew Autonomous Communities',
      ),
      650 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051012',
        'Revenue Name' => 'Registration Of Churches For The Conduct Of Mar',
      ),
      651 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051013',
        'Revenue Name' => 'Registration Of Town Unions',
      ),
      652 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051014',
        'Revenue Name' => 'Registration Of Town Unions Executives',
      ),
      653 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051015',
        'Revenue Name' => 'Renewal And Reg. Of Town Unions',
      ),
      654 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051016',
        'Revenue Name' => 'Staff Of Office Of Aneze',
      ),
      655 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051017',
        'Revenue Name' => 'Tender Fees',
      ),
      656 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051018',
        'Revenue Name' => 'Operational Permit',
      ),
      657 => 
      array (
        'Category Code' => '14001001',
        'Category Name' => 'Ministry Of Local Government And Chieftancy Affair',
        'Revenue Code' => '14001001-12051019',
        'Revenue Name' => 'Capitation Rate',
      ),
      658 => 
      array (
        'Category Code' => '15001001',
        'Category Name' => 'Ministry Of Planning And Economic Development',
        'Revenue Code' => '15001001-12071001',
        'Revenue Name' => '10% Wht On Consultants',
      ),
      659 => 
      array (
        'Category Code' => '15001001',
        'Category Name' => 'Ministry Of Planning And Economic Development',
        'Revenue Code' => '15001001-12071002',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      660 => 
      array (
        'Category Code' => '15001001',
        'Category Name' => 'Ministry Of Planning And Economic Development',
        'Revenue Code' => '15001001-12071003',
        'Revenue Name' => 'Identification Fees',
      ),
      661 => 
      array (
        'Category Code' => '15001001',
        'Category Name' => 'Ministry Of Planning And Economic Development',
        'Revenue Code' => '15001001-12071004',
        'Revenue Name' => 'Sale Of Budget',
      ),
      662 => 
      array (
        'Category Code' => '15001001',
        'Category Name' => 'Ministry Of Planning And Economic Development',
        'Revenue Code' => '15001001-12071005',
        'Revenue Name' => 'Sale Of Bulletin',
      ),
      663 => 
      array (
        'Category Code' => '15001001',
        'Category Name' => 'Ministry Of Planning And Economic Development',
        'Revenue Code' => '15001001-12071006',
        'Revenue Name' => 'Sale Of Unserviceable Items',
      ),
      664 => 
      array (
        'Category Code' => '15001001',
        'Category Name' => 'Ministry Of Planning And Economic Development',
        'Revenue Code' => '15001001-12071007',
        'Revenue Name' => 'Tender Fees',
      ),
      665 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101001',
        'Revenue Name' => 'Certification And Suitability Certificate',
      ),
      666 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101002',
        'Revenue Name' => 'Inspection And Renewal',
      ),
      667 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101003',
        'Revenue Name' => '10% Wht Consultants',
      ),
      668 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101004',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      669 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101005',
        'Revenue Name' => 'Administrative Fees',
      ),
      670 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101006',
        'Revenue Name' => 'Community Rate',
      ),
      671 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101007',
        'Revenue Name' => 'Course Fees',
      ),
      672 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101008',
        'Revenue Name' => 'Hire Of Gen Sets',
      ),
      673 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101009',
        'Revenue Name' => 'Hire Of Plants And Equipments',
      ),
      674 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101010',
        'Revenue Name' => 'Inspection And StandBy, Inflatable, Multi',
      ),
      675 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101011',
        'Revenue Name' => 'Other Fees',
      ),
      676 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101012',
        'Revenue Name' => 'Permit To Drill Boreholes',
      ),
      677 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101013',
        'Revenue Name' => 'Plant Printing',
      ),
      678 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101014',
        'Revenue Name' => 'Registration & Renewal FeesContractors',
      ),
      679 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101015',
        'Revenue Name' => 'Registration & Renewal Of Town Unions',
      ),
      680 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101016',
        'Revenue Name' => 'Sale Of FormsTown Union Registration',
      ),
      681 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101017',
        'Revenue Name' => 'Sale Of Reg. Forms To Contractors',
      ),
      682 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101018',
        'Revenue Name' => 'Sale Of Scraps',
      ),
      683 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101019',
        'Revenue Name' => 'Street Light Pole Advert Fees',
      ),
      684 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101020',
        'Revenue Name' => 'Tender Fees',
      ),
      685 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101021',
        'Revenue Name' => 'Training And StandBy',
      ),
      686 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101022',
        'Revenue Name' => 'Utility Handling Charges',
      ),
      687 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101023',
        'Revenue Name' => 'Fire Safety Certificate Fees',
      ),
      688 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101024',
        'Revenue Name' => 'Okigwe Water Scheme',
      ),
      689 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101025',
        'Revenue Name' => 'OwerriEbeiri Water Scheme',
      ),
      690 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101026',
        'Revenue Name' => 'Emekuku Water Scheme',
      ),
      691 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101027',
        'Revenue Name' => 'Achingali Water Scheme',
      ),
      692 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101028',
        'Revenue Name' => 'Hire Of Hiab Self Loader',
      ),
      693 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101029',
        'Revenue Name' => 'Hire Of Platform Vehicle',
      ),
      694 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101030',
        'Revenue Name' => 'Commercialization Of Electrical Services In Rural',
      ),
      695 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101031',
        'Revenue Name' => 'Hire Of Compressor',
      ),
      696 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101032',
        'Revenue Name' => 'Hire Of Dewatery Pump',
      ),
      697 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101033',
        'Revenue Name' => 'Fire Safety Certificate Report And Standby',
      ),
      698 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101034',
        'Revenue Name' => 'Fire Service Training Fees',
      ),
      699 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101035',
        'Revenue Name' => 'Initial Fire Safety Inspection Fess',
      ),
      700 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101036',
        'Revenue Name' => 'Initial Fees For Existing Filling Station And Hot',
      ),
      701 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101037',
        'Revenue Name' => 'Renewal Fees For Existing Petrol Station And Hote',
      ),
      702 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101038',
        'Revenue Name' => 'Petrol Fees For Independent Markets',
      ),
      703 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101039',
        'Revenue Name' => 'Bottled Water Production',
      ),
      704 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101040',
        'Revenue Name' => 'Borehole Analysis Certification',
      ),
      705 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101041',
        'Revenue Name' => 'Registration Fee For All Bottled And Sachet Water',
      ),
      706 => 
      array (
        'Category Code' => '17002001',
        'Category Name' => 'Ministry Of Public Utilities And Rural Development',
        'Revenue Code' => '17002001-12101042',
        'Revenue Name' => 'Renewal Of Bottled Water And Sachet Water Compani',
      ),
      707 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201001',
        'Revenue Name' => 'Tailoring Services',
      ),
      708 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201002',
        'Revenue Name' => 'Annual Fire Inspection Fee',
      ),
      709 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201003',
        'Revenue Name' => 'Fees For Heavy Vehicle Permit',
      ),
      710 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201004',
        'Revenue Name' => 'Computer Manifest Insurance Commission',
      ),
      711 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201005',
        'Revenue Name' => 'Ferry Fees',
      ),
      712 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201006',
        'Revenue Name' => 'Fire Certificate Report',
      ),
      713 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201007',
        'Revenue Name' => 'Fire Service Training Fee',
      ),
      714 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201008',
        'Revenue Name' => 'First Certificate Inspection FeeBank',
      ),
      715 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201009',
        'Revenue Name' => 'Hire Of Plants And Equip',
      ),
      716 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201010',
        'Revenue Name' => 'Inspection Fees For Private Mechanic Workshop',
      ),
      717 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201011',
        'Revenue Name' => 'Mot Certificate Commission',
      ),
      718 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201012',
        'Revenue Name' => 'Other Fees',
      ),
      719 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201013',
        'Revenue Name' => 'Penalty For Heavy Vehicle With Load Limits',
      ),
      720 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201014',
        'Revenue Name' => 'Registration Fees For Auctioneers',
      ),
      721 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201015',
        'Revenue Name' => 'Registration Of Commercial Vehicles',
      ),
      722 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201016',
        'Revenue Name' => 'Terry Fee',
      ),
      723 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201017',
        'Revenue Name' => 'Trade Test Fee',
      ),
      724 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201018',
        'Revenue Name' => 'Training Fees For Chief Drivers',
      ),
      725 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201019',
        'Revenue Name' => 'Vehicle Inspection Fee',
      ),
      726 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201020',
        'Revenue Name' => 'Mot Fees',
      ),
      727 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201021',
        'Revenue Name' => 'Imo Transort Company (Revenue)',
      ),
      728 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201022',
        'Revenue Name' => 'Issuance Of National Certificate',
      ),
      729 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201023',
        'Revenue Name' => 'Issuance Of Emblem',
      ),
      730 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201024',
        'Revenue Name' => 'Registration/Renewal Of Transport Companies',
      ),
      731 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201025',
        'Revenue Name' => 'Traffic Environment/Routine Road Checks',
      ),
      732 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201026',
        'Revenue Name' => 'Registration/Renewal Of Driving School',
      ),
      733 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201027',
        'Revenue Name' => 'Testing/Signing Of Applicant Drivers Pro National',
      ),
      734 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201028',
        'Revenue Name' => 'Registration/Renewal Of Parks',
      ),
      735 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201029',
        'Revenue Name' => 'Keke/Motorcycle Daily Tolls',
      ),
      736 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201030',
        'Revenue Name' => 'Registration/Renewal Of Public Mass Transit In The State',
      ),
      737 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201031',
        'Revenue Name' => 'Haulage Fee',
      ),
      738 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201032',
        'Revenue Name' => 'Truck Wavers',
      ),
      739 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201033',
        'Revenue Name' => 'Parking Permint',
      ),
      740 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201034',
        'Revenue Name' => 'Transport Company Registration',
      ),
      741 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201035',
        'Revenue Name' => 'Taxes 5% With Holding Tax On Contracts',
      ),
      742 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201036',
        'Revenue Name' => '10% Tax On Consulting Fee',
      ),
      743 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201037',
        'Revenue Name' => 'Fine/Fee',
      ),
      744 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201038',
        'Revenue Name' => 'Tender Fee',
      ),
      745 => 
      array (
        'Category Code' => '49001001',
        'Category Name' => 'Ministry Of Transport',
        'Revenue Code' => '49001001-15201039',
        'Revenue Name' => 'Vio Offences/ Road Check',
      ),
      746 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201001',
        'Revenue Name' => 'Annual Fire Inspection Fees',
      ),
      747 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201002',
        'Revenue Name' => 'Fees For Heavy Vehicle Pemits',
      ),
      748 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201003',
        'Revenue Name' => 'Computers Manifest Insurance Commissions',
      ),
      749 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201004',
        'Revenue Name' => 'Ferry Fees',
      ),
      750 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201005',
        'Revenue Name' => 'Fire Certificate Reports',
      ),
      751 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201006',
        'Revenue Name' => 'Fire Service Training Fees',
      ),
      752 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201007',
        'Revenue Name' => 'First Certificate Inspection FeesBank',
      ),
      753 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201008',
        'Revenue Name' => 'Hire Of Plants & Equip',
      ),
      754 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201009',
        'Revenue Name' => 'Inspection Fees For Private Mechanic Workshops',
      ),
      755 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201010',
        'Revenue Name' => 'Materials Laboratory Test Proceeds',
      ),
      756 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201011',
        'Revenue Name' => 'Mot Certificate Commission',
      ),
      757 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201012',
        'Revenue Name' => 'Other Fees',
      ),
      758 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201013',
        'Revenue Name' => 'Penalty For Heavy Vehicles With Load Limit',
      ),
      759 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201014',
        'Revenue Name' => 'Printing Of Building Plans',
      ),
      760 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201015',
        'Revenue Name' => 'Proceeds From Workshop Products',
      ),
      761 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201016',
        'Revenue Name' => 'Registration Fees For Auctioneers',
      ),
      762 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201017',
        'Revenue Name' => 'Registration Of Commercial Vehicles',
      ),
      763 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201018',
        'Revenue Name' => 'Registration Of Contractors',
      ),
      764 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201019',
        'Revenue Name' => 'Renewal Fees For Auctioneers',
      ),
      765 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201020',
        'Revenue Name' => 'Renewal Fees For Existing Petrol StationLocal Marketer',
      ),
      766 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201021',
        'Revenue Name' => 'Renewal Fees For Existing Petrol StationMultinationals',
      ),
      767 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201022',
        'Revenue Name' => 'Renewal Fees For Existing Petrol StationsIndependent',
      ),
      768 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201023',
        'Revenue Name' => 'Renewal Fees For Existing Petrol StationsLocal',
      ),
      769 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201024',
        'Revenue Name' => 'Renewal Fees For Private Mechanic Workshops',
      ),
      770 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201025',
        'Revenue Name' => 'Rent On Govt. Quarters Outside Imo State',
      ),
      771 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201026',
        'Revenue Name' => 'Rent On Junior Staff Quarters',
      ),
      772 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201027',
        'Revenue Name' => 'Rent On Parliament Quarters For Legislatures',
      ),
      773 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201028',
        'Revenue Name' => 'Rent On Senior Staff Quarters',
      ),
      774 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201029',
        'Revenue Name' => 'Sale Of Housing Estate Nekede',
      ),
      775 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201030',
        'Revenue Name' => 'Sale Of Housing Estate Okporo',
      ),
      776 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201031',
        'Revenue Name' => 'Sale Of Old Newspapers',
      ),
      777 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201032',
        'Revenue Name' => 'Street Light Ploe Advart Fees',
      ),
      778 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201033',
        'Revenue Name' => 'Tailoring Services',
      ),
      779 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201034',
        'Revenue Name' => 'Tender Fees',
      ),
      780 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201035',
        'Revenue Name' => 'Terry Fees',
      ),
      781 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201036',
        'Revenue Name' => 'Trade Test Fees',
      ),
      782 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201037',
        'Revenue Name' => 'Training Fees For Chief Drivers',
      ),
      783 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201038',
        'Revenue Name' => 'Vehicle Inspection Fees',
      ),
      784 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201039',
        'Revenue Name' => 'Mot Fees',
      ),
      785 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201040',
        'Revenue Name' => 'Imo Transport Company (Revenue)',
      ),
      786 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201041',
        'Revenue Name' => 'Issuance Of National Certificate Of Roadworthiness',
      ),
      787 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201042',
        'Revenue Name' => 'Issuance Of Emblems',
      ),
      788 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201043',
        'Revenue Name' => 'Registration/Renewal Of Transport Companies',
      ),
      789 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201044',
        'Revenue Name' => 'Traffic Environment/Routine Road Checks',
      ),
      790 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201045',
        'Revenue Name' => 'Registration/Renewal Of Driving School',
      ),
      791 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201046',
        'Revenue Name' => 'Testing/Siging Of Applicant Drivers Fro National Drivers License',
      ),
      792 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201047',
        'Revenue Name' => 'Registration/Renewal Of Parks',
      ),
      793 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201048',
        'Revenue Name' => 'Keke/Motorcycle Daily Tolls',
      ),
      794 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201049',
        'Revenue Name' => 'Registration/Renewal Of Public Mass Transit In The State',
      ),
      795 => 
      array (
        'Category Code' => '38001001',
        'Category Name' => 'Ministry Of Transport And Housing',
        'Revenue Code' => '38001001-14201050',
        'Revenue Name' => 'Imo State Manifest Scheme',
      ),
      796 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091001',
        'Revenue Name' => '5% Withholding Tax',
      ),
      797 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091002',
        'Revenue Name' => 'Adoption Fees',
      ),
      798 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091003',
        'Revenue Name' => 'Application Fee For Ngo',
      ),
      799 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091004',
        'Revenue Name' => 'Application Fee For Orphanage Home',
      ),
      800 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091005',
        'Revenue Name' => 'Application Fees For Day Care Center/Creche',
      ),
      801 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091006',
        'Revenue Name' => 'Approval Fee For Day Care',
      ),
      802 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091007',
        'Revenue Name' => 'Big Motherless Babies Home',
      ),
      803 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091008',
        'Revenue Name' => 'Creche Fees',
      ),
      804 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091009',
        'Revenue Name' => 'F.S.P. Park Facilities',
      ),
      805 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091010',
        'Revenue Name' => 'F.S.P. Shop',
      ),
      806 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091011',
        'Revenue Name' => 'Facility/Fee Inspection',
      ),
      807 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091012',
        'Revenue Name' => 'Final Approval Fee For Orphanage',
      ),
      808 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091013',
        'Revenue Name' => 'Final Approval Ngo',
      ),
      809 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091014',
        'Revenue Name' => 'Hire Of Childrens Parliament Hall',
      ),
      810 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091015',
        'Revenue Name' => 'Hire Of F.S.P Hall',
      ),
      811 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091016',
        'Revenue Name' => 'Hire Of Hall',
      ),
      812 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091017',
        'Revenue Name' => 'Hire Of Open Space',
      ),
      813 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091018',
        'Revenue Name' => 'Hire Of Open SpaceOrlu',
      ),
      814 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091019',
        'Revenue Name' => 'Hire Of Seats And Canopies',
      ),
      815 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091020',
        'Revenue Name' => 'Inspection Fee For Day Care',
      ),
      816 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091021',
        'Revenue Name' => 'Inspection Fee For Ngo',
      ),
      817 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091022',
        'Revenue Name' => 'Inspection Fees',
      ),
      818 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091023',
        'Revenue Name' => 'License Registration',
      ),
      819 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091024',
        'Revenue Name' => 'Matrimonial Cases',
      ),
      820 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091025',
        'Revenue Name' => 'Mini StadiumF.S.P Schools',
      ),
      821 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091026',
        'Revenue Name' => 'Miscellaneous',
      ),
      822 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091027',
        'Revenue Name' => 'Processing Fee For Ngo',
      ),
      823 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091028',
        'Revenue Name' => 'Processing Fee For Orphanage',
      ),
      824 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091029',
        'Revenue Name' => 'Processing Fees For Day Care Center/Creche',
      ),
      825 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091030',
        'Revenue Name' => 'Refund Of Fertilizer Loan',
      ),
      826 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091031',
        'Revenue Name' => 'Reg & Renewal Of Social Clubs And Organisations',
      ),
      827 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091032',
        'Revenue Name' => 'Reg. Of Day Centers',
      ),
      828 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091033',
        'Revenue Name' => 'Registration Fee For Orphanage Home',
      ),
      829 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091034',
        'Revenue Name' => 'Registration Of Day Care',
      ),
      830 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091035',
        'Revenue Name' => 'Registration Of Ngo\'s',
      ),
      831 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091036',
        'Revenue Name' => 'Registration Of Social Clubs And Organizations',
      ),
      832 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091037',
        'Revenue Name' => 'Renewal Fee For Day Care Center/Creche',
      ),
      833 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091038',
        'Revenue Name' => 'Renewal Fee For Orpahanage',
      ),
      834 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091039',
        'Revenue Name' => 'Renewal Fee Ngo',
      ),
      835 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091040',
        'Revenue Name' => 'Renewal Of Social Clubs/Organization',
      ),
      836 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091041',
        'Revenue Name' => 'Revenue From Shops',
      ),
      837 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091042',
        'Revenue Name' => 'Sale Of Appl. Form For Creche Facilities',
      ),
      838 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091043',
        'Revenue Name' => 'Sale Of Fertilizer',
      ),
      839 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091044',
        'Revenue Name' => 'Sale Of Unserviceable Items',
      ),
      840 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091045',
        'Revenue Name' => 'School Fee (F.S.P)',
      ),
      841 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091046',
        'Revenue Name' => 'Skill Acquisition',
      ),
      842 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091047',
        'Revenue Name' => 'Tender Fees',
      ),
      843 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091048',
        'Revenue Name' => 'Trade Fair Proceeds',
      ),
      844 => 
      array (
        'Category Code' => '17001001',
        'Category Name' => 'Ministry Of Women Affairs',
        'Revenue Code' => '17001001-12091049',
        'Revenue Name' => '10% Wht Consultants',
      ),
      845 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901001',
        'Revenue Name' => '10% Wht On Consultants',
      ),
      846 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901002',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      847 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901003',
        'Revenue Name' => 'Application Forms For Reg. & Renewal Of Contracts',
      ),
      848 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901004',
        'Revenue Name' => 'Condemned Stores',
      ),
      849 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901005',
        'Revenue Name' => 'Fee For Inspection Of Private Mechanic Workshops',
      ),
      850 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901006',
        'Revenue Name' => 'Fee For Renewal Of Private Mechanic Workshops',
      ),
      851 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901007',
        'Revenue Name' => 'Fees For Appoval Of Petrol Stations',
      ),
      852 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901008',
        'Revenue Name' => 'Fees For Closing Of Roads In Urban Areas',
      ),
      853 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901009',
        'Revenue Name' => 'Fees For Inspection Of Priv. Mech. W/Shops',
      ),
      854 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901010',
        'Revenue Name' => 'Government Unserviceable Equipment',
      ),
      855 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901011',
        'Revenue Name' => 'Hire Of Generation Sets And Illumination Gears',
      ),
      856 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901012',
        'Revenue Name' => 'Hire Of Govt. Vehicles',
      ),
      857 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901013',
        'Revenue Name' => 'Registration And Renewal Of Contractors',
      ),
      858 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901014',
        'Revenue Name' => 'Tender Fees',
      ),
      859 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901015',
        'Revenue Name' => 'Registration Fee For Auctioneers',
      ),
      860 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901016',
        'Revenue Name' => 'Renewal Fees For Auctioneers',
      ),
      861 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901017',
        'Revenue Name' => 'Material Laboratory Test Proceeds',
      ),
      862 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901018',
        'Revenue Name' => 'Hire Of Plant And Equipment',
      ),
      863 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901019',
        'Revenue Name' => 'Renewal Fees Of Contractors Registration',
      ),
      864 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901020',
        'Revenue Name' => 'Proceeds From Workshop Products',
      ),
      865 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901021',
        'Revenue Name' => 'Renewal Fees For Existing Petrol StationLocal Marketer',
      ),
      866 => 
      array (
        'Category Code' => '25001001',
        'Category Name' => 'Ministry Of Works',
        'Revenue Code' => '25001001-12901022',
        'Revenue Name' => 'Right Of Way',
      ),
      867 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041001',
        'Revenue Name' => 'Sale Of Tourism Tapes',
      ),
      868 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041002',
        'Revenue Name' => 'Permit Letter To Hospitality',
      ),
      869 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041003',
        'Revenue Name' => 'Organizations',
      ),
      870 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041004',
        'Revenue Name' => 'Sale Of Ahajioku Colloquium',
      ),
      871 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041005',
        'Revenue Name' => 'Sale Of Contractor Forms',
      ),
      872 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041006',
        'Revenue Name' => 'Tourism Development Levy',
      ),
      873 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041007',
        'Revenue Name' => 'Registration Of Cultural Groups',
      ),
      874 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041008',
        'Revenue Name' => 'Hotel Renewal Fees',
      ),
      875 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041009',
        'Revenue Name' => 'Reg./Renewal Of Artists',
      ),
      876 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041010',
        'Revenue Name' => 'Renewal Of Cultural Groups',
      ),
      877 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041011',
        'Revenue Name' => 'Fast Food Registration Fees',
      ),
      878 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041012',
        'Revenue Name' => 'Fast Food Renewal Fee',
      ),
      879 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041013',
        'Revenue Name' => 'Restaurant Registration',
      ),
      880 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041014',
        'Revenue Name' => 'Restraunt Renewal Fee',
      ),
      881 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041015',
        'Revenue Name' => 'Sale Of Ahajioku Publications And Lectures',
      ),
      882 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041016',
        'Revenue Name' => '10% Wht Consultants',
      ),
      883 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041017',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      884 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041018',
        'Revenue Name' => 'Registration & Renewal Of Contractors',
      ),
      885 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041019',
        'Revenue Name' => 'Hotel Registration Fees',
      ),
      886 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041020',
        'Revenue Name' => 'Bukateria Registration Fee',
      ),
      887 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041021',
        'Revenue Name' => 'Bukateria Renewal Fee',
      ),
      888 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041022',
        'Revenue Name' => 'Tour Operator/ Air Travel Registration Fee',
      ),
      889 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041023',
        'Revenue Name' => 'Tour Operator/ Air Travel Renewal Fee',
      ),
      890 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041024',
        'Revenue Name' => 'Club Houses/ SeatOut Houses Registration Fee',
      ),
      891 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041025',
        'Revenue Name' => 'Club Houses/ SeatOut Houses Renewal Fee',
      ),
      892 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041026',
        'Revenue Name' => 'Registration Of Artists',
      ),
      893 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041027',
        'Revenue Name' => 'Sale Of Carnival Tapes',
      ),
      894 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041028',
        'Revenue Name' => 'Sale Of Ahajioku Lectures',
      ),
      895 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041029',
        'Revenue Name' => 'Inspection Fee For New Hotels',
      ),
      896 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041030',
        'Revenue Name' => 'Application Fee For Amusement Park',
      ),
      897 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041031',
        'Revenue Name' => 'Inspection Fee For Amusement Park',
      ),
      898 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041032',
        'Revenue Name' => 'Registration Fee For Amusement Park',
      ),
      899 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041033',
        'Revenue Name' => 'Application Fee For Entertainment Centers',
      ),
      900 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041034',
        'Revenue Name' => 'Inspection Fee For Entertainment Center',
      ),
      901 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041035',
        'Revenue Name' => 'Registration Fee For Entertainment Center',
      ),
      902 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041036',
        'Revenue Name' => 'Application Fee For Event Center',
      ),
      903 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041037',
        'Revenue Name' => 'Inspection Fee For Eateries',
      ),
      904 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041038',
        'Revenue Name' => 'Application Fee For Eateries',
      ),
      905 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041039',
        'Revenue Name' => 'Registration Fee For Eateries',
      ),
      906 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041040',
        'Revenue Name' => 'Inspection Fee For Event Centers',
      ),
      907 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041041',
        'Revenue Name' => 'Lease Rent For Imo Concorde And Casino Hotel',
      ),
      908 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041042',
        'Revenue Name' => 'Lease Rent For Imo Hotel Ltd',
      ),
      909 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041043',
        'Revenue Name' => 'Lease Rent For Oguta Lake Resort',
      ),
      910 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041044',
        'Revenue Name' => 'Lease Rent Of Golf Course Oguta',
      ),
      911 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041045',
        'Revenue Name' => 'Lease Rent Of Conference Hall Oguta',
      ),
      912 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041046',
        'Revenue Name' => 'Hotel Accomodation (Room) Charges/Consumption Charges',
      ),
      913 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041047',
        'Revenue Name' => 'Guest House Motel Application Fee',
      ),
      914 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041048',
        'Revenue Name' => 'Inspection Fee For Guest House/Motel',
      ),
      915 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041049',
        'Revenue Name' => 'Registration Fee For Guest House/ Motel',
      ),
      916 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041050',
        'Revenue Name' => 'Inspection Fee For Restaurant/ Fastfood',
      ),
      917 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041051',
        'Revenue Name' => 'Free Standing Registration',
      ),
      918 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041052',
        'Revenue Name' => 'Operational Permit For Free Standing Registration',
      ),
      919 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041053',
        'Revenue Name' => 'Application Fee For Night Clubs',
      ),
      920 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041054',
        'Revenue Name' => 'Inspection Fee For Night Clubs',
      ),
      921 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041055',
        'Revenue Name' => 'Registration Fee For Night Clubs',
      ),
      922 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041056',
        'Revenue Name' => 'Operational Permit For Night Clubs',
      ),
      923 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041057',
        'Revenue Name' => 'Operational Permit Renewal For Night Clubs',
      ),
      924 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041058',
        'Revenue Name' => 'Travel Anfd Tours Application Fee',
      ),
      925 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041059',
        'Revenue Name' => 'Inspection Fee For Travel And Tours',
      ),
      926 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041060',
        'Revenue Name' => 'Operational Permit For Travel And Tours',
      ),
      927 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041061',
        'Revenue Name' => 'Operational Permit Renewal For Travel And Tours',
      ),
      928 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041062',
        'Revenue Name' => 'Registration Of Artist On Imo Creativity Web/Directory',
      ),
      929 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041063',
        'Revenue Name' => 'Stand Allocation Fee For Creativity Arts/Artists Exhibition/Trade',
      ),
      930 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041064',
        'Revenue Name' => 'Registration Fee For Cinemas/Theater Houses',
      ),
      931 => 
      array (
        'Category Code' => '13001001',
        'Category Name' => 'Ministry Of Culture And Tourism',
        'Revenue Code' => '13001001-12041065',
        'Revenue Name' => 'Registration Fee/Form For Talent Hunt Show/Program',
      ),
      932 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201001',
        'Revenue Name' => 'Denial Of Legitimate Service Paid For',
      ),
      933 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201002',
        'Revenue Name' => 'Mutilation Of Dates And Numbers',
      ),
      934 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201003',
        'Revenue Name' => 'No Certificate Of Fitness/Approved Certification',
      ),
      935 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201004',
        'Revenue Name' => 'No Liquor License',
      ),
      936 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201005',
        'Revenue Name' => 'Non Use Of Uv Light',
      ),
      937 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201006',
        'Revenue Name' => 'Sale/Display/Distribution Of Adulterated Products',
      ),
      938 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201007',
        'Revenue Name' => 'Unauthorized/Unqualified Personnel',
      ),
      939 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201008',
        'Revenue Name' => 'Use Of Unapproved Ingredients',
      ),
      940 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201009',
        'Revenue Name' => '10% Wht On Consultants',
      ),
      941 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201010',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      942 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201011',
        'Revenue Name' => 'Agricultural Control Post On Food Stuff, Vegetables And Fruits(S',
      ),
      943 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201012',
        'Revenue Name' => 'Application Fees For Registration Of CoOperativeSocieties',
      ),
      944 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201013',
        'Revenue Name' => 'Arbitrary Fee',
      ),
      945 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201014',
        'Revenue Name' => 'Arrears Of Cooperative Audit And Supervision Fees',
      ),
      946 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201015',
        'Revenue Name' => 'AudioVisual Aid: Sale Of Products',
      ),
      947 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201016',
        'Revenue Name' => 'Cashew Produce Inspection Fees',
      ),
      948 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201017',
        'Revenue Name' => 'Central Produce Beach',
      ),
      949 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201018',
        'Revenue Name' => 'Cocoa Produce Inspection Fees',
      ),
      950 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201019',
        'Revenue Name' => 'Com. Based Ind. Projects Application Forms',
      ),
      951 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201020',
        'Revenue Name' => 'Commission On Sale Of Industrial Publications',
      ),
      952 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201021',
        'Revenue Name' => 'Commodity Purchase Fees On Industrial Goods(Forth Schedule)',
      ),
      953 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201022',
        'Revenue Name' => 'Coop. College Accommodation Charges',
      ),
      954 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201023',
        'Revenue Name' => 'Cooperative Audit & Supervision Fees',
      ),
      955 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201024',
        'Revenue Name' => 'Cooperative College Accommodation Charges',
      ),
      956 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201025',
        'Revenue Name' => 'Cooperative College Application Fees',
      ),
      957 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201026',
        'Revenue Name' => 'Cooperative College Game And Sports Levy',
      ),
      958 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201027',
        'Revenue Name' => 'CooperativecollegeTutition Fees',
      ),
      959 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201028',
        'Revenue Name' => 'Directors Fees',
      ),
      960 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201029',
        'Revenue Name' => 'Dirty Environment',
      ),
      961 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201030',
        'Revenue Name' => 'Disobedience To Summon',
      ),
      962 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201031',
        'Revenue Name' => 'Display/Sale Of Expired Goods',
      ),
      963 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201032',
        'Revenue Name' => 'Display/Sale Without Label/ No Proper Information',
      ),
      964 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201033',
        'Revenue Name' => 'Essential Commodities',
      ),
      965 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201034',
        'Revenue Name' => 'Exhibitions',
      ),
      966 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201035',
        'Revenue Name' => 'Fresh Palm Fruit BunchProduce Inspection Fees',
      ),
      967 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201036',
        'Revenue Name' => 'Gul Cor Ogut',
      ),
      968 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201037',
        'Revenue Name' => 'HireCanteen Facilities At Orlu & Okigwe',
      ),
      969 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201038',
        'Revenue Name' => 'Hire Of Conference Room',
      ),
      970 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201039',
        'Revenue Name' => 'Hire: Canteen Facilities At Orlu And Okigwe',
      ),
      971 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201040',
        'Revenue Name' => 'Imo International Market: Allocation Fees',
      ),
      972 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201041',
        'Revenue Name' => 'Investment Opportunities In Imo',
      ),
      973 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201042',
        'Revenue Name' => 'Lease RentOguta Hotel',
      ),
      974 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201043',
        'Revenue Name' => 'Lease Rent Of Imo Concorde Hotels Owerri',
      ),
      975 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201044',
        'Revenue Name' => 'Lease Rent Of Oguta Lake Hotels And Gulf CourseOguta',
      ),
      976 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201045',
        'Revenue Name' => 'Liquidation Fees',
      ),
      977 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201046',
        'Revenue Name' => 'Measure Cups',
      ),
      978 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201047',
        'Revenue Name' => 'Minerals Produce Fees(Third Schedule)',
      ),
      979 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201048',
        'Revenue Name' => 'Miscellaneous Fees',
      ),
      980 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201049',
        'Revenue Name' => 'No Fly Catchers',
      ),
      981 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201050',
        'Revenue Name' => 'No Resident Chemist',
      ),
      982 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201051',
        'Revenue Name' => 'No Safety/Proper Wear',
      ),
      983 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201052',
        'Revenue Name' => 'Non Use Of Sterilizing Machine',
      ),
      984 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201053',
        'Revenue Name' => 'Okigwe Pottery CenterSale Of Products',
      ),
      985 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201054',
        'Revenue Name' => 'Other Fees',
      ),
      986 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201055',
        'Revenue Name' => 'Palm Kernel Produce Inspection Fees',
      ),
      987 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201056',
        'Revenue Name' => 'PalmOil Produce Inspection Fees',
      ),
      988 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201057',
        'Revenue Name' => 'Pesticides Fumigation Service',
      ),
      989 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201058',
        'Revenue Name' => 'Proceeds From Export Promotion Seminar',
      ),
      990 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201059',
        'Revenue Name' => 'ReCertification Fees For CoOperativeSocieties',
      ),
      991 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201060',
        'Revenue Name' => 'Reg./Renewal Fees For Business Premises',
      ),
      992 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201061',
        'Revenue Name' => 'Regional MarketsApplication/Allocation Fees',
      ),
      993 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201062',
        'Revenue Name' => 'Registration Fees For Business Premises',
      ),
      994 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201063',
        'Revenue Name' => 'Registration Fees For CoOperative Societies',
      ),
      995 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201064',
        'Revenue Name' => 'Registration Of Produce Merchants/Processing Factories',
      ),
      996 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201065',
        'Revenue Name' => 'Renewal Of Business Premises',
      ),
      997 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201066',
        'Revenue Name' => 'Rent From Central Produce Beaches',
      ),
      998 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201067',
        'Revenue Name' => 'Royalties On School Textbooks',
      ),
      999 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201068',
        'Revenue Name' => 'Rubber Produce Inspection Fees',
      ),
      1000 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201069',
        'Revenue Name' => 'Sale Of 250cc Indigenous Standard',
      ),
      1001 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201070',
        'Revenue Name' => 'Sale Of Adulterated Product',
      ),
      1002 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201071',
        'Revenue Name' => 'Sale Of Application Forms For Small Scale Ind.',
      ),
      1003 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201072',
        'Revenue Name' => 'Sale Of AudioVisal Aids Products',
      ),
      1004 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201073',
        'Revenue Name' => 'Sale Of CoOperative Directory',
      ),
      1005 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201074',
        'Revenue Name' => 'Sale Of CoOperative Field Workers Manuals',
      ),
      1006 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201075',
        'Revenue Name' => 'Sale Of Industrial ProductsHandcrafts',
      ),
      1007 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201076',
        'Revenue Name' => 'Sale Of Old Newspapers',
      ),
      1008 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201077',
        'Revenue Name' => 'Registration/Licensing Of Sellers Of Pest Chemicals And Applianc',
      ),
      1009 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201078',
        'Revenue Name' => 'Sale Of Rotten,Stale Or Bad Product',
      ),
      1010 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201079',
        'Revenue Name' => 'Sale Of Trade Publications',
      ),
      1011 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201080',
        'Revenue Name' => 'Sale Of Uncovered Bread',
      ),
      1012 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201081',
        'Revenue Name' => 'Sale/Display/Distribution Of Contraband',
      ),
      1013 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201082',
        'Revenue Name' => 'Short Charging Of Customer/Client',
      ),
      1014 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201083',
        'Revenue Name' => 'Statutory Enquiry Fee',
      ),
      1015 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201084',
        'Revenue Name' => 'Tender Fees',
      ),
      1016 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201085',
        'Revenue Name' => 'Trade Fair',
      ),
      1017 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201086',
        'Revenue Name' => 'Trade Fair Proceeds',
      ),
      1018 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201087',
        'Revenue Name' => 'Use Of Unapproved Equipment',
      ),
      1019 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201088',
        'Revenue Name' => 'Timber And Allied Market Market Naze',
      ),
      1020 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201089',
        'Revenue Name' => 'Building Material Market Orlu',
      ),
      1021 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201090',
        'Revenue Name' => 'Electrical & Electronics Market Orlu',
      ),
      1022 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201091',
        'Revenue Name' => 'Registration/Licensing Of Stores And Store Keepers',
      ),
      1023 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201092',
        'Revenue Name' => 'Registration/Licensing Of Pest Control Operators',
      ),
      1024 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201093',
        'Revenue Name' => 'Relief Market Umuowa',
      ),
      1025 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201094',
        'Revenue Name' => 'Mgidi Mordern Market',
      ),
      1026 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201095',
        'Revenue Name' => 'Imo Rescue Market Umungwa',
      ),
      1027 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201096',
        'Revenue Name' => 'Old Onitsha Park Shopping Mall Orlu',
      ),
      1028 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201097',
        'Revenue Name' => 'Store Licensing Of Store Keeper',
      ),
      1029 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201098',
        'Revenue Name' => 'Palm Produce License',
      ),
      1030 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201099',
        'Revenue Name' => 'Affiliation Of Contractors',
      ),
      1031 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201100',
        'Revenue Name' => 'Sale Of Govt.Properties',
      ),
      1032 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201101',
        'Revenue Name' => 'Sale Of Reg. Forms For Artisians',
      ),
      1033 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201102',
        'Revenue Name' => 'License Renewal Fees',
      ),
      1034 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201103',
        'Revenue Name' => 'Facility Maint.For Artisians',
      ),
      1035 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201104',
        'Revenue Name' => 'Processing Fee For Matching Fund',
      ),
      1036 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201105',
        'Revenue Name' => 'Search Fees',
      ),
      1037 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201106',
        'Revenue Name' => 'Allocation Fees On Naze Industrial Cluster',
      ),
      1038 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201107',
        'Revenue Name' => 'Express Beach (Rent) Community Purchase Fees',
      ),
      1039 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201108',
        'Revenue Name' => 'Non Refundable Application Fee For Avu Mechanic Village',
      ),
      1040 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201109',
        'Revenue Name' => 'Non Refundable Application Fee For Plant,Heavy Engine Inspection',
      ),
      1041 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201110',
        'Revenue Name' => 'ImoChina Investment And Trade Centre  Registration Fee',
      ),
      1042 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201111',
        'Revenue Name' => 'ImoChina Investment And Trade CentreVerification Fee',
      ),
      1043 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201112',
        'Revenue Name' => 'ImoChina Investment And Trade CentreRenewal Fee',
      ),
      1044 => 
      array (
        'Category Code' => '18001001',
        'Category Name' => 'Ministry Of Commerce And Industry',
        'Revenue Code' => '18001001-12201113',
        'Revenue Name' => 'ImoChina Investment And Trade CentreIndustrial Development Lev',
      ),
      1045 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501001',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      1046 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501002',
        'Revenue Name' => 'AgroMetro: Sale Of Data',
      ),
      1047 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501003',
        'Revenue Name' => 'Cattle Tax',
      ),
      1048 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501004',
        'Revenue Name' => 'Cold Room License',
      ),
      1049 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501005',
        'Revenue Name' => 'Contractors Affiliation Fee',
      ),
      1050 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501006',
        'Revenue Name' => 'Dogs Tax',
      ),
      1051 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501007',
        'Revenue Name' => 'Dugout Licences',
      ),
      1052 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501008',
        'Revenue Name' => 'Earnings From Acharubo Farm Settlement',
      ),
      1053 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501009',
        'Revenue Name' => 'Engr. Condemned Stares',
      ),
      1054 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501010',
        'Revenue Name' => 'Engr. Hire Of Tractor, Equip And Transport',
      ),
      1055 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501011',
        'Revenue Name' => 'Engr. Plan Printing',
      ),
      1056 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501012',
        'Revenue Name' => 'Engr.Repair Of Vehicles And Agric Machinery',
      ),
      1057 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501013',
        'Revenue Name' => 'Fish Inspection Fees',
      ),
      1058 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501014',
        'Revenue Name' => 'Fish Pond Inspection Fees',
      ),
      1059 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501015',
        'Revenue Name' => 'Fisherman Licences',
      ),
      1060 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501016',
        'Revenue Name' => 'Fishing Equipment Licenses',
      ),
      1061 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501017',
        'Revenue Name' => 'Forest Offences',
      ),
      1062 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501018',
        'Revenue Name' => 'Hatcheries',
      ),
      1063 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501019',
        'Revenue Name' => 'Home Economic Sale Of Pastries & Sundry',
      ),
      1064 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501020',
        'Revenue Name' => 'Horse Tax',
      ),
      1065 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501021',
        'Revenue Name' => 'Imo Demonstration Farm License',
      ),
      1066 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501022',
        'Revenue Name' => 'Kayaking License',
      ),
      1067 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501023',
        'Revenue Name' => 'LivestockSale Of Breeding Stock',
      ),
      1068 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501024',
        'Revenue Name' => 'Machinery License Renewal',
      ),
      1069 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501025',
        'Revenue Name' => 'Meat Inspection Fees',
      ),
      1070 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501026',
        'Revenue Name' => 'OthersFresh Fruits Bunch',
      ),
      1071 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501027',
        'Revenue Name' => 'Poultry',
      ),
      1072 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501028',
        'Revenue Name' => 'Produce Tax',
      ),
      1073 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501029',
        'Revenue Name' => 'Produce/Vertinary Fees',
      ),
      1074 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501030',
        'Revenue Name' => 'Promoters Licences',
      ),
      1075 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501031',
        'Revenue Name' => 'Registration Of Butchers',
      ),
      1076 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501032',
        'Revenue Name' => 'Registration Of Commercial Farmers',
      ),
      1077 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501033',
        'Revenue Name' => 'Registration Of Feed Miller',
      ),
      1078 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501034',
        'Revenue Name' => 'Registration Of Fish Farms/Hatcheries',
      ),
      1079 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501035',
        'Revenue Name' => 'Registration Of Fish Marketer',
      ),
      1080 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501036',
        'Revenue Name' => 'Registration Of Homestead Of Fish Ponds',
      ),
      1081 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501037',
        'Revenue Name' => 'Registration Of Piggeries',
      ),
      1082 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501038',
        'Revenue Name' => 'Registration Of Poultries',
      ),
      1083 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501039',
        'Revenue Name' => 'Registration Of Poultry Farmers',
      ),
      1084 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501040',
        'Revenue Name' => 'Registration Of Poultrys And Hatcheries',
      ),
      1085 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501041',
        'Revenue Name' => 'Registration Of Private Slaughter Houses',
      ),
      1086 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501042',
        'Revenue Name' => 'Registration Of Private Verterinary Clinics',
      ),
      1087 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501043',
        'Revenue Name' => 'Rent On Government Properties',
      ),
      1088 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501044',
        'Revenue Name' => 'Revenue From Staff Quarters',
      ),
      1089 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501045',
        'Revenue Name' => 'Sale Of AgroSilviculture',
      ),
      1090 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501046',
        'Revenue Name' => 'Sale Of Eggs',
      ),
      1091 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501047',
        'Revenue Name' => 'Sale Of Farm Tools And Planting Material',
      ),
      1092 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501048',
        'Revenue Name' => 'Sale Of Fish',
      ),
      1093 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501049',
        'Revenue Name' => 'Sale Of Forest Produce',
      ),
      1094 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501050',
        'Revenue Name' => 'Sale Of Horticultural Planting Materials',
      ),
      1095 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501051',
        'Revenue Name' => 'Sale Of Indigenous Fruit Tress',
      ),
      1096 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501052',
        'Revenue Name' => 'Sale Of Livestock Product',
      ),
      1097 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501053',
        'Revenue Name' => 'Sale Of Milled Rice',
      ),
      1098 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501054',
        'Revenue Name' => 'Sale Of Old Newpapers',
      ),
      1099 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501055',
        'Revenue Name' => 'Sale Of Pest Control Chemicals/Applications',
      ),
      1100 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501056',
        'Revenue Name' => 'Sale Of Publications',
      ),
      1101 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501057',
        'Revenue Name' => 'Sale Of Small Holders Oil Palm Seedlings',
      ),
      1102 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501058',
        'Revenue Name' => 'Sale Of Staple Food Items',
      ),
      1103 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501059',
        'Revenue Name' => 'Sale Of Timber From Govt. Land',
      ),
      1104 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501060',
        'Revenue Name' => 'Sale Of Trade Publication',
      ),
      1105 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501061',
        'Revenue Name' => 'Sale Of Tree Crop Materials',
      ),
      1106 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501062',
        'Revenue Name' => 'Sale Of Tree Crop Seedlings',
      ),
      1107 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501063',
        'Revenue Name' => 'Sheep/Goat Tax',
      ),
      1108 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501064',
        'Revenue Name' => 'Sport Fishery Fees',
      ),
      1109 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501065',
        'Revenue Name' => 'Survey Charges',
      ),
      1110 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501066',
        'Revenue Name' => 'Verterinary Cattle Latrage',
      ),
      1111 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501067',
        'Revenue Name' => 'Vetenary Drug Licences',
      ),
      1112 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501068',
        'Revenue Name' => 'Vetenary Licences',
      ),
      1113 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501069',
        'Revenue Name' => 'VeterinaryPoultry Sales',
      ),
      1114 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501070',
        'Revenue Name' => 'VeterinarySale Of Livestock Products',
      ),
      1115 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501071',
        'Revenue Name' => 'Veterinary Clinic, Treatment Fees',
      ),
      1116 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501072',
        'Revenue Name' => 'Veterinary Prophylactic Treatment',
      ),
      1117 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501073',
        'Revenue Name' => 'Veterinary: Sale Of Livestock Products',
      ),
      1118 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501074',
        'Revenue Name' => 'Zoo Fees',
      ),
      1119 => 
      array (
        'Category Code' => '31001001',
        'Category Name' => 'Ministry Of Agriculture & Natural Resources',
        'Revenue Code' => '31001001-13501075',
        'Revenue Name' => '10% Wht Consultants',
      ),
      1120 => 
      array (
        'Category Code' => '84001001',
        'Category Name' => 'Ministry Of Culture And Creative Arts',
        'Revenue Code' => '84001001-12101000',
        'Revenue Name' => 'Registration Of Cultural Groups',
      ),
      1121 => 
      array (
        'Category Code' => '84001001',
        'Category Name' => 'Ministry Of Culture And Creative Arts',
        'Revenue Code' => '84001001-12101001',
        'Revenue Name' => 'Sale Of Ahiajoku Lecture Publication',
      ),
      1122 => 
      array (
        'Category Code' => '84001001',
        'Category Name' => 'Ministry Of Culture And Creative Arts',
        'Revenue Code' => '84001001-12101002',
        'Revenue Name' => 'Sales Of Ahiajoku Colloquim',
      ),
      1123 => 
      array (
        'Category Code' => '84001001',
        'Category Name' => 'Ministry Of Culture And Creative Arts',
        'Revenue Code' => '84001001-12101003',
        'Revenue Name' => 'Renewal Of Cultural Groups',
      ),
      1124 => 
      array (
        'Category Code' => '84001001',
        'Category Name' => 'Ministry Of Culture And Creative Arts',
        'Revenue Code' => '84001001-12101004',
        'Revenue Name' => 'Imo Creative Artists Website/Directory',
      ),
      1125 => 
      array (
        'Category Code' => '84001001',
        'Category Name' => 'Ministry Of Culture And Creative Arts',
        'Revenue Code' => '84001001-12101005',
        'Revenue Name' => 'Creative Arts/Artists Exhibition/Trade Fair',
      ),
      1126 => 
      array (
        'Category Code' => '84001001',
        'Category Name' => 'Ministry Of Culture And Creative Arts',
        'Revenue Code' => '84001001-12101006',
        'Revenue Name' => 'Registration Of Cinemas/Theatres',
      ),
      1127 => 
      array (
        'Category Code' => '84001001',
        'Category Name' => 'Ministry Of Culture And Creative Arts',
        'Revenue Code' => '84001001-12101007',
        'Revenue Name' => 'Registration For The Talent Hunt Show/Program',
      ),
      1128 => 
      array (
        'Category Code' => '84001001',
        'Category Name' => 'Ministry Of Culture And Creative Arts',
        'Revenue Code' => '84001001-12101008',
        'Revenue Name' => 'Imo State Museum Centers, Yet To Be Established',
      ),
      1129 => 
      array (
        'Category Code' => '84001001',
        'Category Name' => 'Ministry Of Culture And Creative Arts',
        'Revenue Code' => '84001001-12101009',
        'Revenue Name' => 'Registration Of Heritage Sites, Yet To Be Commenced',
      ),
      1130 => 
      array (
        'Category Code' => '72001001',
        'Category Name' => 'Ministry Of Enterprenuership And Skill Development',
        'Revenue Code' => '72001001-12101772',
        'Revenue Name' => 'Workshop And Training',
      ),
      1131 => 
      array (
        'Category Code' => '72001001',
        'Category Name' => 'Ministry Of Enterprenuership And Skill Development',
        'Revenue Code' => '72001001-12101772pos Online',
        'Revenue Name' => 'Owerri Workshop And Trainingpos Online',
      ),
      1132 => 
      array (
        'Category Code' => '72001001',
        'Category Name' => 'Ministry Of Enterprenuership And Skill Development',
        'Revenue Code' => '72001001-12101773',
        'Revenue Name' => 'Levies For Artisans',
      ),
      1133 => 
      array (
        'Category Code' => '72001001',
        'Category Name' => 'Ministry Of Enterprenuership And Skill Development',
        'Revenue Code' => '72001001-12101773pos Online',
        'Revenue Name' => 'Owerri Levies For Artisanspos Online',
      ),
      1134 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101700',
        'Revenue Name' => 'Application Fee For New Hotel',
      ),
      1135 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101700pos Online',
        'Revenue Name' => 'Application Fee For New Hotel Pos Online',
      ),
      1136 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101701',
        'Revenue Name' => 'Inspection Fee For New Hotel',
      ),
      1137 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101701pos Online',
        'Revenue Name' => 'Inspection Fee For New Hotel Pos Online',
      ),
      1138 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101702',
        'Revenue Name' => 'Registration Fee For New Hotel',
      ),
      1139 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101702pos Online',
        'Revenue Name' => 'Registration Fee For New Hotel Pos Online',
      ),
      1140 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101703',
        'Revenue Name' => 'Renewal Fee For New Hotel',
      ),
      1141 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101703pos Online',
        'Revenue Name' => 'Renewal Fee For New Hotel Pos Online',
      ),
      1142 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101704',
        'Revenue Name' => 'Application Fee For Entertainment Center (Lounge Bar )',
      ),
      1143 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101704pos Online',
        'Revenue Name' => 'Application Fee For Entertainment Center (Lounge Bar ) Pos Online',
      ),
      1144 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101705',
        'Revenue Name' => 'Inspection Fee For Entertainment Center (Lounge Bar)',
      ),
      1145 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101705pos Online',
        'Revenue Name' => 'Inspection Fee For Entertainment Center (Lounge Bar) Pos Online',
      ),
      1146 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101706',
        'Revenue Name' => 'Registration Fee For Entertainmner Center (Lounge Bar)',
      ),
      1147 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101706pos Online',
        'Revenue Name' => 'Registration Fee For Entertainmner Center (Lounge Bar) Pos Online',
      ),
      1148 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101707',
        'Revenue Name' => 'Renewal Fee For Entertainment Center (Lounge Bar)',
      ),
      1149 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101707pos Online',
        'Revenue Name' => 'Renewal Fee For Entertainment Center (Lounge Bar) Pos Online',
      ),
      1150 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101708',
        'Revenue Name' => 'Application Fee For Event Center',
      ),
      1151 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101708pos Online',
        'Revenue Name' => 'Application Fee For Event Center Pos Online',
      ),
      1152 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101709',
        'Revenue Name' => 'Inspection Fee For Event Center',
      ),
      1153 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101709pos Online',
        'Revenue Name' => 'Inspection Fee For Event Center Pos Online',
      ),
      1154 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101710',
        'Revenue Name' => 'Registration Fee For Event Center',
      ),
      1155 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101710pos Online',
        'Revenue Name' => 'Registration Fee For Event Center Pos Online',
      ),
      1156 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101711',
        'Revenue Name' => 'Renewal For Event Center',
      ),
      1157 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101711pos Online',
        'Revenue Name' => 'Renewal For Event Center Pos Online',
      ),
      1158 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101712',
        'Revenue Name' => 'Lease Rent Of Imo Concorde Hotel And Casino',
      ),
      1159 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101712pos Online',
        'Revenue Name' => 'Lease Rent Of Imo Concorde Hotel And Casino Pos Online',
      ),
      1160 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101713',
        'Revenue Name' => 'Lease Rent Of Imo Hotel Okigwe',
      ),
      1161 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101713pos Online',
        'Revenue Name' => 'Lease Rent Of Imo Hotel Okigwe Pos Online',
      ),
      1162 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101714',
        'Revenue Name' => 'Lease Rent Of Oguta Lake Resort',
      ),
      1163 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101714pos Online',
        'Revenue Name' => 'Lease Rent Of Oguta Lake Resort Pos Online',
      ),
      1164 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101715',
        'Revenue Name' => 'Lease Rent Of Gulf Course Oguta',
      ),
      1165 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101715pos Online',
        'Revenue Name' => 'Lease Rent Of Gulf Course Oguta Pos Online',
      ),
      1166 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101716',
        'Revenue Name' => 'Lease Rent Of Conference Hall Oguta',
      ),
      1167 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101716pos Online',
        'Revenue Name' => 'Lease Rent Of Conference Hall Oguta Pos Online',
      ),
      1168 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101717',
        'Revenue Name' => 'Lease Rent Of Children\'s Park',
      ),
      1169 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101717pos Online',
        'Revenue Name' => 'Lease Rent Of Children\'s Park Pos Online',
      ),
      1170 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101718',
        'Revenue Name' => 'Recertification Of New Hotel',
      ),
      1171 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101718pos Online',
        'Revenue Name' => 'Recertification Of New Hotel Pos Online',
      ),
      1172 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101719',
        'Revenue Name' => 'Hotel Operational Permit Owerri Metropolis',
      ),
      1173 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101719pos Online',
        'Revenue Name' => 'Hotel Operational Permit Owerri Metropolis Pos Online',
      ),
      1174 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101720',
        'Revenue Name' => 'Hotel Operational Permit Owerri/Okigwe/Orlu',
      ),
      1175 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101720pos Online',
        'Revenue Name' => 'Hotel Operational Permit Owerri/Okigwe/Orlu Pos Online',
      ),
      1176 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101721',
        'Revenue Name' => 'Application Fee For New Motels',
      ),
      1177 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101721pos Online',
        'Revenue Name' => 'Application Fee For New Motels Pos Online',
      ),
      1178 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101722',
        'Revenue Name' => 'Inspection Fee For New Motels',
      ),
      1179 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101722pos Online',
        'Revenue Name' => 'Inspection Fee For New Motels Pos Online',
      ),
      1180 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101723',
        'Revenue Name' => 'Registration Fee For New Motels',
      ),
      1181 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101723pos Online',
        'Revenue Name' => 'Registration Fee For New Motels Pos Online',
      ),
      1182 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101724',
        'Revenue Name' => 'Operational Permit Fee For New Motels',
      ),
      1183 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101724pos Online',
        'Revenue Name' => 'Operational Permit Fee For New Motels Pos Online',
      ),
      1184 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101725',
        'Revenue Name' => 'Renwal Fee For Motel',
      ),
      1185 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101725pos Online',
        'Revenue Name' => 'Renwal Fee For Motel Pos Online',
      ),
      1186 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101726',
        'Revenue Name' => 'Application Fee For Urban Guest House',
      ),
      1187 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101726pos Online',
        'Revenue Name' => 'Application Fee For Urban Guest House Pos Online',
      ),
      1188 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101727',
        'Revenue Name' => 'Inspection Fee For Urban Guest House',
      ),
      1189 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101727pos Online',
        'Revenue Name' => 'Inspection Fee For Urban Guest House Pos Online',
      ),
      1190 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101728',
        'Revenue Name' => 'Registration Fee For Urban Guest House',
      ),
      1191 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101728pos Online',
        'Revenue Name' => 'Registration Fee For Urban Guest House Pos Online',
      ),
      1192 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101729',
        'Revenue Name' => 'Operational Permit For Urban Guest House',
      ),
      1193 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101729pos Online',
        'Revenue Name' => 'Operational Permit For Urban Guest House Pos Online',
      ),
      1194 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101730',
        'Revenue Name' => 'Renewal Fee For Urban Guest House',
      ),
      1195 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101730pos Online',
        'Revenue Name' => 'Renewal Fee For Urban Guest House Pos Online',
      ),
      1196 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101731',
        'Revenue Name' => 'Application Fee For Rural Guest House',
      ),
      1197 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101731pos Online',
        'Revenue Name' => 'Application Fee For Rural Guest House Pos Online',
      ),
      1198 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101732',
        'Revenue Name' => 'Inspection Fee For Rural Guest House',
      ),
      1199 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101732pos Online',
        'Revenue Name' => 'Inspection Fee For Rural Guest House Pos Online',
      ),
      1200 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101733',
        'Revenue Name' => 'Registration Fee For Rural Guest House',
      ),
      1201 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101733pos Online',
        'Revenue Name' => 'Registration Fee For Rural Guest House Pos Online',
      ),
      1202 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101734',
        'Revenue Name' => 'Operational Permit For Rural Guest House',
      ),
      1203 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101734pos Online',
        'Revenue Name' => 'Operational Permit For Rural Guest House Pos Online',
      ),
      1204 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101735',
        'Revenue Name' => 'Renewal Fee For Rural Guest House',
      ),
      1205 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101735pos Online',
        'Revenue Name' => 'Renewal Fee For Rural Guest House Pos Online',
      ),
      1206 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101736',
        'Revenue Name' => 'Application/Recertification Fee For Eateries (Big)',
      ),
      1207 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101736pos Online',
        'Revenue Name' => 'Application/Recertification Fee For Eateries (Big) Pos Online',
      ),
      1208 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101737',
        'Revenue Name' => 'Registration Fee For Eateries (Big)',
      ),
      1209 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101737pos Online',
        'Revenue Name' => 'Registration Fee For Eateries (Big) Pos Online',
      ),
      1210 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101738',
        'Revenue Name' => 'Inspection Fee For Eateries (Big)',
      ),
      1211 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101738pos Online',
        'Revenue Name' => 'Inspection Fee For Eateries (Big) Pos Online',
      ),
      1212 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101739',
        'Revenue Name' => 'Operational Permit Fee For Eateries (Big)',
      ),
      1213 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101739pos Online',
        'Revenue Name' => 'Operational Permit Fee For Eateries (Big) Pos Online',
      ),
      1214 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101740',
        'Revenue Name' => 'Renewal Fee For Eateries (Big)',
      ),
      1215 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101740pos Online',
        'Revenue Name' => 'Renewal Fee For Eateries (Big) Pos Online',
      ),
      1216 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101741',
        'Revenue Name' => 'Application/Recertification Fee For Eateries (Small)',
      ),
      1217 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101741pos Online',
        'Revenue Name' => 'Application/Recertification Fee For Eateries (Small) Pos Online',
      ),
      1218 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101742',
        'Revenue Name' => 'Registration Fee For Eateries (Small)',
      ),
      1219 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101742pos Online',
        'Revenue Name' => 'Registration Fee For Eateries (Small) Pos Online',
      ),
      1220 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101743',
        'Revenue Name' => 'Inspection Fee For Eateries (Small)',
      ),
      1221 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101743pos Online',
        'Revenue Name' => 'Inspection Fee For Eateries (Small) Pos Online',
      ),
      1222 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101744',
        'Revenue Name' => 'Operational Permit For Eateries (Small)',
      ),
      1223 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101744pos Online',
        'Revenue Name' => 'Operational Permit For Eateries (Small) Pos Online',
      ),
      1224 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101745',
        'Revenue Name' => 'Renewal Fee For Eateries (Small)',
      ),
      1225 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101745pos Online',
        'Revenue Name' => 'Renewal Fee For Eateries (Small) Pos Online',
      ),
      1226 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101746',
        'Revenue Name' => 'Application/Recertification Fee For Nite Club',
      ),
      1227 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101746pos Online',
        'Revenue Name' => 'Application/Recertification Fee For Nite Club Pos Online',
      ),
      1228 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101747',
        'Revenue Name' => 'Inspection Fee For Nite Club',
      ),
      1229 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101747pos Online',
        'Revenue Name' => 'Inspection Fee For Nite Club Pos Online',
      ),
      1230 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101748',
        'Revenue Name' => 'Registration Fee For Nite Club',
      ),
      1231 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101748pos Online',
        'Revenue Name' => 'Registration Fee For Nite Club Pos Online',
      ),
      1232 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101749',
        'Revenue Name' => 'Operational Permit For Nite Club',
      ),
      1233 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101749pos Online',
        'Revenue Name' => 'Operational Permit For Nite Club Pos Online',
      ),
      1234 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101750',
        'Revenue Name' => 'Renewal Fee For Nite Club',
      ),
      1235 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101750pos Online',
        'Revenue Name' => 'Renewal Fee For Nite Club Pos Online',
      ),
      1236 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101751',
        'Revenue Name' => 'Application/Recertification Fee For Travel And Tours Establishment',
      ),
      1237 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101751pos Online',
        'Revenue Name' => 'Application/Recertification Fee For Travel And Tours Establishment Pos Online',
      ),
      1238 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101752',
        'Revenue Name' => 'Registration Fee For Travel And Tour Establishment',
      ),
      1239 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101752pos Online',
        'Revenue Name' => 'Registration Fee For Travel And Tour Establishment Pos Online',
      ),
      1240 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101753',
        'Revenue Name' => 'Inspection Fee For Travel And Tours Establishement',
      ),
      1241 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101753pos Online',
        'Revenue Name' => 'Inspection Fee For Travel And Tours Establishement Pos Online',
      ),
      1242 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101754',
        'Revenue Name' => 'Operational Permit For Travel And Tours Establishment',
      ),
      1243 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101754pos Online',
        'Revenue Name' => 'Operational Permit For Travel And Tours Establishment Pos Online',
      ),
      1244 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101755',
        'Revenue Name' => 'Renewal Fee For Travel And Tours Estblishment',
      ),
      1245 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101755pos Online',
        'Revenue Name' => 'Renewal Fee For Travel And Tours Estblishment Pos Online',
      ),
      1246 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101756',
        'Revenue Name' => 'Application Fee For Cinema',
      ),
      1247 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101756pos Online',
        'Revenue Name' => 'Application Fee For Cinema Pos Online',
      ),
      1248 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101757',
        'Revenue Name' => 'Registration Fee For Cinema',
      ),
      1249 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101757pos Online',
        'Revenue Name' => 'Registration Fee For Cinema Pos Online',
      ),
      1250 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101758',
        'Revenue Name' => 'Inspection Fee For Cinema',
      ),
      1251 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101758pos Online',
        'Revenue Name' => 'Inspection Fee For Cinema Pos Online',
      ),
      1252 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101759',
        'Revenue Name' => 'Operational Permit For Cinema',
      ),
      1253 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101759pos Online',
        'Revenue Name' => 'Operational Permit For Cinema Pos Online',
      ),
      1254 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101760',
        'Revenue Name' => 'Renewal Fee For Cinema',
      ),
      1255 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101760pos Online',
        'Revenue Name' => 'Renewal Fee For Cinema Pos Online',
      ),
      1256 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101761',
        'Revenue Name' => 'Application Fee For Amusement Park',
      ),
      1257 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101761pos Online',
        'Revenue Name' => 'Application Fee For Amusement Park Pos Online',
      ),
      1258 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101762',
        'Revenue Name' => 'Inspection Fee For Amusement Park',
      ),
      1259 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101762pos Online',
        'Revenue Name' => 'Inspection Fee For Amusement Park Pos Online',
      ),
      1260 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101763',
        'Revenue Name' => 'Registration Fee For Amusement Park',
      ),
      1261 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101763pos Online',
        'Revenue Name' => 'Registration Fee For Amusement Park Pos Online',
      ),
      1262 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101764',
        'Revenue Name' => 'Operational Fee For Amusement Park',
      ),
      1263 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101764pos Online',
        'Revenue Name' => 'Operational Fee For Amusement Park Pos Online',
      ),
      1264 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101765',
        'Revenue Name' => 'Renewal Fee For Amusement Park',
      ),
      1265 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101765pos Online',
        'Revenue Name' => 'Renewal Fee For Amusement Park Pos Online',
      ),
      1266 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101766',
        'Revenue Name' => 'Recertification Fee For Existing Hotel',
      ),
      1267 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101766pos Online',
        'Revenue Name' => 'Recertification Fee For Existing Hotel Pos Online',
      ),
      1268 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101767',
        'Revenue Name' => 'Fees From Visit To Z+C47oological And Botanical Garden For Children',
      ),
      1269 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101767pos Online',
        'Revenue Name' => 'Fees From Visit To Z+C47oological And Botanical Garden For Children Pos Onlin',
      ),
      1270 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101768',
        'Revenue Name' => 'Fee From Visit To Zoological And Botanical Garden By Adult',
      ),
      1271 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101768pos Online',
        'Revenue Name' => 'Fee From Visit To Zoological And Botanical Garden By Adult Pos Online',
      ),
      1272 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101769',
        'Revenue Name' => 'Proceed From Imo Carnival',
      ),
      1273 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101769pos Online',
        'Revenue Name' => 'Proceed From Imo Carnival Pos Online',
      ),
      1274 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101770',
        'Revenue Name' => 'Occupancy And Consumption Tax',
      ),
      1275 => 
      array (
        'Category Code' => '69001001',
        'Category Name' => 'Ministry Of Tourism',
        'Revenue Code' => '69001001-12101770pos Online',
        'Revenue Name' => 'Occupancy And Consumption Tax Pos Online',
      ),
      1276 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101404',
        'Revenue Name' => 'S Star Hotels',
      ),
      1277 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101404pos Online',
        'Revenue Name' => 'S Star Hotels Pos Online',
      ),
      1278 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101405',
        'Revenue Name' => '3 Star Hotels',
      ),
      1279 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101405pos Online',
        'Revenue Name' => '3 Star Hotels Pos Online',
      ),
      1280 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101406',
        'Revenue Name' => 'Hotel 30 Rooms',
      ),
      1281 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101406pos Online',
        'Revenue Name' => 'Hotel 30 Rooms Pos Online',
      ),
      1282 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101407',
        'Revenue Name' => 'Hotels (130) Rooms',
      ),
      1283 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101407pos Online',
        'Revenue Name' => 'Hotels (130) Rooms Pos Online',
      ),
      1284 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101408',
        'Revenue Name' => 'Hotels (110) Rooms',
      ),
      1285 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101408pos Online',
        'Revenue Name' => 'Hotels (110) Rooms Pos Online',
      ),
      1286 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101409',
        'Revenue Name' => 'Banks (Commercial Merchants) Branch',
      ),
      1287 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101409pos Online',
        'Revenue Name' => 'Banks (Commercial Merchants) Branch Pos Online',
      ),
      1288 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101410',
        'Revenue Name' => 'Community Micro Finance Bank',
      ),
      1289 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101410pos Online',
        'Revenue Name' => 'Community Micro Finance Bank Pos Online',
      ),
      1290 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101411',
        'Revenue Name' => 'Central Bank',
      ),
      1291 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101411pos Online',
        'Revenue Name' => 'Central Bank Pos Online',
      ),
      1292 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101412',
        'Revenue Name' => 'Regional Bank Office',
      ),
      1293 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101412pos Online',
        'Revenue Name' => 'Regional Bank Office Pos Online',
      ),
      1294 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101413',
        'Revenue Name' => 'Finance Insurance Investment Companies',
      ),
      1295 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101413pos Online',
        'Revenue Name' => 'Finance Insurance Investment Companies Pos Online',
      ),
      1296 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101414',
        'Revenue Name' => 'Strategic / Multinational Company (Breweries)',
      ),
      1297 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101414pos Online',
        'Revenue Name' => 'Strategic / Multinational Company (Breweries) Pos Online',
      ),
      1298 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101415',
        'Revenue Name' => 'Major Construction Companies',
      ),
      1299 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101415pos Online',
        'Revenue Name' => 'Major Construction Companies Pos Online',
      ),
      1300 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101416',
        'Revenue Name' => 'Other Construction Companies',
      ),
      1301 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101416pos Online',
        'Revenue Name' => 'Other Construction Companies Pos Online',
      ),
      1302 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101417',
        'Revenue Name' => 'Manufacturing Companies (Large)',
      ),
      1303 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101417pos Online',
        'Revenue Name' => 'Manufacturing Companies (Large) Pos Online',
      ),
      1304 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101418',
        'Revenue Name' => 'Manufacturing Companies (Medium)',
      ),
      1305 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101418pos Online',
        'Revenue Name' => 'Manufacturing Companies (Medium) Pos Online',
      ),
      1306 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101419',
        'Revenue Name' => 'Manufacturing Companies (Small)',
      ),
      1307 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101419pos Online',
        'Revenue Name' => 'Manufacturing Companies (Small) Pos Online',
      ),
      1308 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101420',
        'Revenue Name' => 'Oil Marketing Companies (Area And Branch)',
      ),
      1309 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101420pos Online',
        'Revenue Name' => 'Oil Marketing Companies (Area And Branch) Pos Online',
      ),
      1310 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101421',
        'Revenue Name' => 'Computer Company Firms (Big)',
      ),
      1311 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101421pos Online',
        'Revenue Name' => 'Computer Company Firms (Big) Pos Online',
      ),
      1312 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101422',
        'Revenue Name' => 'Computer Company Firms (Small)',
      ),
      1313 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101422pos Online',
        'Revenue Name' => 'Computer Company Firms (Small) Pos Online',
      ),
      1314 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101423',
        'Revenue Name' => 'Security Agencies',
      ),
      1315 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101423pos Online',
        'Revenue Name' => 'Security Agencies Pos Online',
      ),
      1316 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101424',
        'Revenue Name' => 'Interior Decorators / Furniture',
      ),
      1317 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101424pos Online',
        'Revenue Name' => 'Interior Decorators / Furniture Pos Online',
      ),
      1318 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101425',
        'Revenue Name' => 'Interior Decorators / Furniture Companies (Medium)',
      ),
      1319 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101425pos Online',
        'Revenue Name' => 'Interior Decorators / Furniture Companies (Medium) Pos Online',
      ),
      1320 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101426',
        'Revenue Name' => 'Interior Decorators / Furniture',
      ),
      1321 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101426pos Online',
        'Revenue Name' => 'Interior Decorators / Furniture Pos Online',
      ),
      1322 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101427',
        'Revenue Name' => 'Airlines',
      ),
      1323 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101427pos Online',
        'Revenue Name' => 'Airlines Pos Online',
      ),
      1324 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101428',
        'Revenue Name' => 'Courier Service / Travel Agents',
      ),
      1325 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101428pos Online',
        'Revenue Name' => 'Courier Service / Travel Agents Pos Online',
      ),
      1326 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101429',
        'Revenue Name' => 'Clearing Agents',
      ),
      1327 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101429pos Online',
        'Revenue Name' => 'Clearing Agents Pos Online',
      ),
      1328 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101430',
        'Revenue Name' => 'Passengers Transport (Large)',
      ),
      1329 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101430pos Online',
        'Revenue Name' => 'Passengers Transport (Large) Pos Online',
      ),
      1330 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101431',
        'Revenue Name' => 'Passengers Transport (Small)',
      ),
      1331 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101431pos Online',
        'Revenue Name' => 'Passengers Transport (Small)  Pos Online',
      ),
      1332 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101432',
        'Revenue Name' => 'Haulage Contractors/ Trailers',
      ),
      1333 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101432pos Online',
        'Revenue Name' => 'Haulage Contractors/ Trailers Pos Online',
      ),
      1334 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101433',
        'Revenue Name' => 'Heavy Plant Hirers (Large)',
      ),
      1335 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101433pos Online',
        'Revenue Name' => 'Heavy Plant Hirers (Large) Pos Online',
      ),
      1336 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101434',
        'Revenue Name' => 'Heavy Plant Hirers (Small)',
      ),
      1337 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101434pos Online',
        'Revenue Name' => 'Heavy Plant Hirers (Small) Pos Online',
      ),
      1338 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101435',
        'Revenue Name' => 'Motor Dealers Tokumbo (Small)',
      ),
      1339 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101435pos Online',
        'Revenue Name' => 'Motor Dealers Tokumbo (Small) Pos Online',
      ),
      1340 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101436',
        'Revenue Name' => 'Filling Station (3 Pumps And Above)',
      ),
      1341 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101436pos Online',
        'Revenue Name' => 'Filling Station (3 Pumps And Above) Pos Online',
      ),
      1342 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101437',
        'Revenue Name' => 'Filling Station (12 Pumps)',
      ),
      1343 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101437pos Online',
        'Revenue Name' => 'Filling Station (12 Pumps) Pos Online',
      ),
      1344 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101438',
        'Revenue Name' => 'General Merchants / Distributors (Large)',
      ),
      1345 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101438pos Online',
        'Revenue Name' => 'General Merchants / Distributors (Large)  Pos Online',
      ),
      1346 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101439',
        'Revenue Name' => 'General Merchants / Distributors (Small)',
      ),
      1347 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101439pos Online',
        'Revenue Name' => 'General Merchants / Distributors (Small)  Pos Online',
      ),
      1348 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101440',
        'Revenue Name' => 'Department Store (Large)',
      ),
      1349 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101440pos Online',
        'Revenue Name' => 'Department Store (Large) Pos Online',
      ),
      1350 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101441',
        'Revenue Name' => 'Major Distribution/ Deparment Companies',
      ),
      1351 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101441pos Online',
        'Revenue Name' => 'Major Distribution/ Deparment Companies Pos Online',
      ),
      1352 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101442',
        'Revenue Name' => 'Supermarket/Store (Large)',
      ),
      1353 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101442pos Online',
        'Revenue Name' => 'Supermarket/Store (Large)Pos Online',
      ),
      1354 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101443',
        'Revenue Name' => 'Supermarket/Store (Small)',
      ),
      1355 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101443pos Online',
        'Revenue Name' => 'Supermarket/Store (Small)Pos Online',
      ),
      1356 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101444',
        'Revenue Name' => 'Department Store (Big)',
      ),
      1357 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101444pos Online',
        'Revenue Name' => 'Department Store (Big) Pos Online',
      ),
      1358 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101445',
        'Revenue Name' => 'Bookshop/Stationery Store (Large)',
      ),
      1359 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101445pos Online',
        'Revenue Name' => 'Bookshop/Stationery Store (Large) Pos Online',
      ),
      1360 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101446',
        'Revenue Name' => 'Bookshop/Stationery Store (Small)',
      ),
      1361 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101446pos Online',
        'Revenue Name' => 'Bookshop/Stationery Store (Small)Pos Online',
      ),
      1362 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101447',
        'Revenue Name' => 'Patent Medcine/Provision Store (Big)',
      ),
      1363 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101447pos Online',
        'Revenue Name' => 'Patent Medcine/Provision Store (Big) Pos Online',
      ),
      1364 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101448',
        'Revenue Name' => 'Patent Medcine/Provision Store (Medium)',
      ),
      1365 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101448pos Online',
        'Revenue Name' => 'Patent Medcine/Provision Store (Medium) Pos Online',
      ),
      1366 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101449',
        'Revenue Name' => 'Patent Medcine/Provision Store ( Small)',
      ),
      1367 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101449pos Online',
        'Revenue Name' => 'Patent Medcine/Provision Store ( Small) Pos Online',
      ),
      1368 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101450',
        'Revenue Name' => 'Pharmacies/Chemist (Large)',
      ),
      1369 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101450pos Online',
        'Revenue Name' => 'Pharmacies/Chemist (Large) Pos Online',
      ),
      1370 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101451',
        'Revenue Name' => 'Pharmacies/Chemist (Medium)',
      ),
      1371 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101451pos Online',
        'Revenue Name' => 'Pharmacies/Chemist (Medium)Pos Online',
      ),
      1372 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101452',
        'Revenue Name' => 'Pahremacies/Chemist (Small)',
      ),
      1373 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101452pos Online',
        'Revenue Name' => 'Pahremacies/Chemist (Small) Pos Online',
      ),
      1374 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101453',
        'Revenue Name' => 'Private Hospitals, Clinics Maternity (Above 50 Beds)',
      ),
      1375 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101453pos Online',
        'Revenue Name' => 'Private Hospitals, Clinics Maternity (Above 50 Beds) Pos Onlin',
      ),
      1376 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101454',
        'Revenue Name' => 'Private Hospitals, Clinics Maternity (Above 3050 Beds)',
      ),
      1377 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101454pos Online',
        'Revenue Name' => 'Private Hospitals, Clinics Maternity (Above 3050 Beds) Pos On',
      ),
      1378 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101455',
        'Revenue Name' => 'Private Hospitals, Clinics Maternity (Above 30 Beds)',
      ),
      1379 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101455pos Online',
        'Revenue Name' => 'Private Hospitals, Clinics Maternity (Above 30 Beds) Pos Onlin',
      ),
      1380 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101456',
        'Revenue Name' => 'Private Hospitals, Clinics Matetrnity (Above 110 Beds)',
      ),
      1381 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101456pos Online',
        'Revenue Name' => 'Private Hospitals, Clinics Matetrnity (Above 110 Beds) Pos On',
      ),
      1382 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101457',
        'Revenue Name' => 'Optical Service',
      ),
      1383 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101457pos Online',
        'Revenue Name' => 'Optical Service Pos Online',
      ),
      1384 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101458',
        'Revenue Name' => 'Residential Houses (Per Flat)',
      ),
      1385 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101458pos Online',
        'Revenue Name' => 'Residential Houses (Per Flat)Pos Online',
      ),
      1386 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101459',
        'Revenue Name' => 'Bungalows',
      ),
      1387 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101459pos Online',
        'Revenue Name' => 'Bungalows Pos Online',
      ),
      1388 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101460',
        'Revenue Name' => 'Duplex',
      ),
      1389 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101460pos Online',
        'Revenue Name' => 'Duplexpos Online',
      ),
      1390 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101461',
        'Revenue Name' => 'Self Contain',
      ),
      1391 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101461pos Online',
        'Revenue Name' => 'Self Contain Pos Online',
      ),
      1392 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101462',
        'Revenue Name' => 'Semi Detached Duplex',
      ),
      1393 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101462pos Online',
        'Revenue Name' => 'Semi Detached Duplex Pos Online',
      ),
      1394 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101463',
        'Revenue Name' => 'Hostel (46 Rooms)',
      ),
      1395 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101463pos Online',
        'Revenue Name' => 'Hostel (46 Rooms) Pos Online',
      ),
      1396 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101464',
        'Revenue Name' => 'Oprptalmological Service',
      ),
      1397 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101464pos Online',
        'Revenue Name' => 'Oprptalmological Service Pos Online',
      ),
      1398 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101465',
        'Revenue Name' => 'Dental Clinics',
      ),
      1399 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101465pos Online',
        'Revenue Name' => 'Dental Clinics Pos Online',
      ),
      1400 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101466',
        'Revenue Name' => 'Physiotherapy',
      ),
      1401 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101466pos Online',
        'Revenue Name' => 'Physiotherapy Pos Online',
      ),
      1402 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101467',
        'Revenue Name' => 'Acupuncture',
      ),
      1403 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101467pos Online',
        'Revenue Name' => 'Acupuncturepos Online',
      ),
      1404 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101468',
        'Revenue Name' => 'Embalment Centres',
      ),
      1405 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101468pos Online',
        'Revenue Name' => 'Embalment Centrespos Online',
      ),
      1406 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101469',
        'Revenue Name' => 'Nutritional Unit/Food Supplement (Retailers) Small',
      ),
      1407 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101469pos Online',
        'Revenue Name' => 'Nutritional Unit/Food Supplement (Retailers) Smallpos Online',
      ),
      1408 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101470',
        'Revenue Name' => 'Nutritional Unit/Food Supplement And Chemical Distributors',
      ),
      1409 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101470pos Online',
        'Revenue Name' => 'Nutritional Unit/Food Supplement And Chemical Distributors Pos',
      ),
      1410 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101471',
        'Revenue Name' => 'Nutritional Unit/Food Supplement Zonal Headquarters',
      ),
      1411 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101471pos Online',
        'Revenue Name' => 'Nutritional Unit/Food Supplement Zonal Headquarters Pos Online',
      ),
      1412 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101472',
        'Revenue Name' => 'Health Farm/Food Supplement',
      ),
      1413 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101472pos Online',
        'Revenue Name' => 'Health Farm/Food Supplement Pos Online',
      ),
      1414 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101473',
        'Revenue Name' => 'Bakeries/Confectioneries (Large)',
      ),
      1415 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101473pos Online',
        'Revenue Name' => 'Bakeries/Confectioneries (Large) Pos Online',
      ),
      1416 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101474',
        'Revenue Name' => 'Bakeries/Confectioneries (Small)',
      ),
      1417 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101474pos Online',
        'Revenue Name' => 'Bakeries/Confectioneries (Small) Pos Online',
      ),
      1418 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101475',
        'Revenue Name' => 'Block Industries (Large)',
      ),
      1419 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101475pos Online',
        'Revenue Name' => 'Block Industries (Large) Pos Online',
      ),
      1420 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101476',
        'Revenue Name' => 'Block Indutries (Small)',
      ),
      1421 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101476pos Online',
        'Revenue Name' => 'Block Indutries (Small)Pos Online',
      ),
      1422 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101477',
        'Revenue Name' => 'Building Materials Dealers (Large)',
      ),
      1423 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101477pos Online',
        'Revenue Name' => 'Building Materials Dealers (Large) Pos Online',
      ),
      1424 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101478',
        'Revenue Name' => 'Building Materials Dealers (Medium)',
      ),
      1425 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101478pos Online',
        'Revenue Name' => 'Building Materials Dealers (Medium) Pos Online',
      ),
      1426 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101479',
        'Revenue Name' => 'Building Materials Dealers (Small)',
      ),
      1427 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101479pos Online',
        'Revenue Name' => 'Building Materials Dealers (Small) Pos Online',
      ),
      1428 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101480',
        'Revenue Name' => 'Beer/Spirit Wholesale (Big)',
      ),
      1429 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101480pos Online',
        'Revenue Name' => 'Beer/Spirit Wholesale (Big) Pos Online',
      ),
      1430 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101481',
        'Revenue Name' => 'Beer/Spirit Wholesale (Medium)',
      ),
      1431 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101481pos Online',
        'Revenue Name' => 'Beer/Spirit Wholesale (Medium) Pos Online',
      ),
      1432 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101482',
        'Revenue Name' => 'Beer/Spirit Wholesale (Small)',
      ),
      1433 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101482pos Online',
        'Revenue Name' => 'Beer/Spirit Wholesale (Small) Pos Online',
      ),
      1434 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101483',
        'Revenue Name' => 'Beer/Spirit Retailer (Big)',
      ),
      1435 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101483pos Online',
        'Revenue Name' => 'Beer/Spirit Retailer (Big) Pos Online',
      ),
      1436 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101484',
        'Revenue Name' => 'Beer/Spirit Retailer (Small)',
      ),
      1437 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101484pos Online',
        'Revenue Name' => 'Beer/Spirit Retailer (Small) Pos Online',
      ),
      1438 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101485',
        'Revenue Name' => 'Electronics/Gas Dealers (Large)',
      ),
      1439 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101485pos Online',
        'Revenue Name' => 'Electronics/Gas Dealers (Large)Pos Online',
      ),
      1440 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101486',
        'Revenue Name' => 'Electronics/Gas Dealers (Medium)',
      ),
      1441 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101486pos Online',
        'Revenue Name' => 'Electronics/Gas Dealers (Medium) Pos Online',
      ),
      1442 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101487',
        'Revenue Name' => 'Electronics/Gas Dealers (Small)',
      ),
      1443 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101487pos Online',
        'Revenue Name' => 'Electronics/Gas Dealers (Small)Pos Online',
      ),
      1444 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101488',
        'Revenue Name' => 'Vehicle Spare Parts Dealer (Big)',
      ),
      1445 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101488pos Online',
        'Revenue Name' => 'Vehicle Spare Parts Dealer (Big) Pos Online',
      ),
      1446 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101489',
        'Revenue Name' => 'Vehicle Spare Parts Dealer (Medium)',
      ),
      1447 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101489pos Online',
        'Revenue Name' => 'Vehicle Spare Parts Dealer (Medium) Pos Online',
      ),
      1448 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101490',
        'Revenue Name' => 'Vehicle Spare Parts Dealer (Small)',
      ),
      1449 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101490pos Online',
        'Revenue Name' => 'Vehicle Spare Parts Dealer (Small) Pos Online',
      ),
      1450 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101491',
        'Revenue Name' => 'Licensed Armed Dealers',
      ),
      1451 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101491pos Online',
        'Revenue Name' => 'Licensed Armed Dealers Pos Online',
      ),
      1452 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101492',
        'Revenue Name' => 'Sawmills/Timber Dealers',
      ),
      1453 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101492pos Online',
        'Revenue Name' => 'Sawmills/Timber Dealers Pos Online',
      ),
      1454 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101493',
        'Revenue Name' => 'Scrap Metal Dealers',
      ),
      1455 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101493pos Online',
        'Revenue Name' => 'Scrap Metal Dealers Pos Online',
      ),
      1456 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101494',
        'Revenue Name' => 'Laundries/Dry Cleaners (Big)',
      ),
      1457 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101494pos Online',
        'Revenue Name' => 'Laundries/Dry Cleaners (Big)Pos Online',
      ),
      1458 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101495',
        'Revenue Name' => 'Laundries/Dry Cleaners (Medium)',
      ),
      1459 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101495pos Online',
        'Revenue Name' => 'Laundries/Dry Cleaners (Medium) Pos Online',
      ),
      1460 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101496',
        'Revenue Name' => 'Laundries/Dry Cleaners (Small)',
      ),
      1461 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101496pos Online',
        'Revenue Name' => 'Laundries/Dry Cleaners (Small) Pos Online',
      ),
      1462 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101497',
        'Revenue Name' => 'Merchandized/Plantation Farms (Big)',
      ),
      1463 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101497pos Online',
        'Revenue Name' => 'Merchandized/Plantation Farms (Big) Pos Online',
      ),
      1464 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101498',
        'Revenue Name' => 'Merchandized/Plantation Farms (Small)',
      ),
      1465 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101498pos Online',
        'Revenue Name' => 'Merchandized/Plantation Farms (Small) Pos Online',
      ),
      1466 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101499',
        'Revenue Name' => 'Secondary/Primary Nursery Schools (Private)',
      ),
      1467 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101499pos Online',
        'Revenue Name' => 'Secondary/Primary Nursery Schools (Private) Pos Online',
      ),
      1468 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101500',
        'Revenue Name' => 'Primary/Nursery Schools (Private)',
      ),
      1469 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101500pos Online',
        'Revenue Name' => 'Primary/Nursery Schools (Private) Pos Online',
      ),
      1470 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101501',
        'Revenue Name' => 'Nursery Schools (Private)',
      ),
      1471 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101501pos Online',
        'Revenue Name' => 'Nursery Schools (Private) Pos Online',
      ),
      1472 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101502',
        'Revenue Name' => 'Day Care Ceners (Private)',
      ),
      1473 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101502pos Online',
        'Revenue Name' => 'Day Care Ceners (Private) Pos Online',
      ),
      1474 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101503',
        'Revenue Name' => 'Gaming/Casino Centers (Private)',
      ),
      1475 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101503pos Online',
        'Revenue Name' => 'Gaming/Casino Centers (Private) Pos Online',
      ),
      1476 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101504',
        'Revenue Name' => 'Pool Agents/Betting/Games (Medium)',
      ),
      1477 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101504pos Online',
        'Revenue Name' => 'Pool Agents/Betting/Games (Medium) Pos Online',
      ),
      1478 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101505',
        'Revenue Name' => 'Pool Agents (Small)',
      ),
      1479 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101505pos Online',
        'Revenue Name' => 'Pool Agents (Small) Pos Online',
      ),
      1480 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101506',
        'Revenue Name' => 'Mechanics/Welders/Auto Electrical',
      ),
      1481 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101506pos Online',
        'Revenue Name' => 'Mechanics/Welders/Auto Electrical Pos Online',
      ),
      1482 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101507',
        'Revenue Name' => 'Artisians Etc (Small)',
      ),
      1483 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101507pos Online',
        'Revenue Name' => 'Artisians Etc (Small) Pos Online',
      ),
      1484 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101508',
        'Revenue Name' => 'Publishers',
      ),
      1485 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101508pos Online',
        'Revenue Name' => 'Publishers Pos Online',
      ),
      1486 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101509',
        'Revenue Name' => 'Printers (Large)',
      ),
      1487 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101509pos Online',
        'Revenue Name' => 'Printers (Large) Pos Online',
      ),
      1488 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101510',
        'Revenue Name' => 'Printers (Medium)',
      ),
      1489 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101510pos Online',
        'Revenue Name' => 'Printers (Medium) Pos Online',
      ),
      1490 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101511',
        'Revenue Name' => 'Printers (Small)',
      ),
      1491 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101511pos Online',
        'Revenue Name' => 'Printers (Small) Pos Online',
      ),
      1492 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101512',
        'Revenue Name' => 'Restaurant With International Menu',
      ),
      1493 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101512pos Online',
        'Revenue Name' => 'Restaurant With International Menu Pos Online',
      ),
      1494 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101513',
        'Revenue Name' => 'Restaurant (Large)',
      ),
      1495 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101513pos Online',
        'Revenue Name' => 'Restaurant (Large) Pos Online',
      ),
      1496 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101514',
        'Revenue Name' => 'Restaurant (Small)',
      ),
      1497 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101514pos Online',
        'Revenue Name' => 'Restaurant (Small)Pos Online',
      ),
      1498 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101515',
        'Revenue Name' => 'Canteens/Snack Bar',
      ),
      1499 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101515pos Online',
        'Revenue Name' => 'Canteens/Snack Barpos Online',
      ),
      1500 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101516',
        'Revenue Name' => 'Eating Houses/Shanty',
      ),
      1501 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101516pos Online',
        'Revenue Name' => 'Eating Houses/Shanty Pos Online',
      ),
      1502 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101517',
        'Revenue Name' => 'Cinema/Night Clubs (Big)',
      ),
      1503 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101517pos Online',
        'Revenue Name' => 'Cinema/Night Clubs (Big) Pos Online',
      ),
      1504 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101518',
        'Revenue Name' => 'Cinema/Night Clubs (Medium)',
      ),
      1505 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101518pos Online',
        'Revenue Name' => 'Cinema/Night Clubs (Medium)Pos Online',
      ),
      1506 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101519',
        'Revenue Name' => 'Cinema/Night Clubs (Small)',
      ),
      1507 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101519pos Online',
        'Revenue Name' => 'Cinema/Night Clubs (Small) Pos Online',
      ),
      1508 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101520',
        'Revenue Name' => 'Professional Lawyers, Architects, Accountants, Engineers',
      ),
      1509 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101520pos Online',
        'Revenue Name' => 'Professional Lawyers, Architects, Accountants, Engineers Pos O',
      ),
      1510 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101521',
        'Revenue Name' => 'MultiPractioners, SolePractitioners',
      ),
      1511 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101521pos Online',
        'Revenue Name' => 'MultiPractioners, SolePractitioners Pos Online',
      ),
      1512 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101522',
        'Revenue Name' => 'Fashion Designers/Saloon/Tailor (Large)',
      ),
      1513 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101522pos Online',
        'Revenue Name' => 'Fashion Designers/Saloon/Tailor (Large) Pos Online',
      ),
      1514 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101523',
        'Revenue Name' => 'Business/Vocational Centers/Secretarial Institute (Medium)',
      ),
      1515 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101523pos Online',
        'Revenue Name' => 'Business/Vocational Centers/Secretarial Institute (Medium) Pos',
      ),
      1516 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101524',
        'Revenue Name' => 'Business/Vocational Centers/Secretarial Institute (Small)',
      ),
      1517 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101524pos Online',
        'Revenue Name' => 'Business/Vocational Centers/Secretarial Institute (Small) Pos',
      ),
      1518 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101525',
        'Revenue Name' => 'Petty Traders',
      ),
      1519 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101525pos Online',
        'Revenue Name' => 'Petty Traders Pos Online',
      ),
      1520 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101526',
        'Revenue Name' => 'Gsm Friendship Centers (Mtn, Glo, Airtel, Zoom)',
      ),
      1521 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101526pos Online',
        'Revenue Name' => 'Gsm Friendship Centers (Mtn, Glo, Airtel, Zoom) Pos Online',
      ),
      1522 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101527',
        'Revenue Name' => 'Palm Kernel Mills (Big)',
      ),
      1523 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101527pos Online',
        'Revenue Name' => 'Palm Kernel Mills (Big) Pos Online',
      ),
      1524 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101528',
        'Revenue Name' => 'Palm Kernel Mills (Small)',
      ),
      1525 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101528pos Online',
        'Revenue Name' => 'Palm Kernel Mills (Small) Pos Online',
      ),
      1526 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101529',
        'Revenue Name' => 'Refrigerator/Tv/Radio/Electronic Repairs',
      ),
      1527 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101529pos Online',
        'Revenue Name' => 'Refrigerator/Tv/Radio/Electronic Repairs Pos Online',
      ),
      1528 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101530',
        'Revenue Name' => 'Gsm /Phones Accessories',
      ),
      1529 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101530pos Online',
        'Revenue Name' => 'Gsm /Phones Accessories Pos Online',
      ),
      1530 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101531',
        'Revenue Name' => 'Rental Services',
      ),
      1531 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101531pos Online',
        'Revenue Name' => 'Rental Services Pos Online',
      ),
      1532 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101532',
        'Revenue Name' => 'Sales Of Aluminum',
      ),
      1533 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101532pos Online',
        'Revenue Name' => 'Sales Of Aluminum Pos Online',
      ),
      1534 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101533',
        'Revenue Name' => 'Barbing Saloon',
      ),
      1535 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101533pos Online',
        'Revenue Name' => 'Barbing Saloon Pos Online',
      ),
      1536 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101534',
        'Revenue Name' => 'Sshoe Making/Bag Repair',
      ),
      1537 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101534pos Online',
        'Revenue Name' => 'Sshoe Making/Bag Repair Pos Online',
      ),
      1538 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101535',
        'Revenue Name' => 'Sales Of Cosmetic/ Attachment',
      ),
      1539 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101535pos Online',
        'Revenue Name' => 'Sales Of Cosmetic/ Attachment Pos Online',
      ),
      1540 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101536',
        'Revenue Name' => 'Textiles/ Ladys Hat (Big)',
      ),
      1541 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101536pos Online',
        'Revenue Name' => 'Textiles/ Lady\'s Hat (Big) Pos Online',
      ),
      1542 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101537',
        'Revenue Name' => 'Textiles/ Ladys Hat (Small)',
      ),
      1543 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101537pos Online',
        'Revenue Name' => 'Textiles/ Lady\'s Hat (Small) Pos Online',
      ),
      1544 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101538',
        'Revenue Name' => 'Phone Call',
      ),
      1545 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101538pos Online',
        'Revenue Name' => 'Phone Call Pos Online',
      ),
      1546 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101539',
        'Revenue Name' => 'Heavy Duty Equipment',
      ),
      1547 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101539pos Online',
        'Revenue Name' => 'Heavy Duty Equipment Pos Online',
      ),
      1548 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101540',
        'Revenue Name' => 'Livestock Feeds/ Vet Services',
      ),
      1549 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101540pos Online',
        'Revenue Name' => 'Livestock Feeds/ Vet Services Pos Online',
      ),
      1550 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101541',
        'Revenue Name' => 'Road Hawking Of Industrial Products',
      ),
      1551 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101541pos Online',
        'Revenue Name' => 'Road Hawking Of Industrial Products Pos Online',
      ),
      1552 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101542',
        'Revenue Name' => 'Art Gallery/Workshop',
      ),
      1553 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101542pos Online',
        'Revenue Name' => 'Art Gallery/Workshop Pos Online',
      ),
      1554 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101543',
        'Revenue Name' => 'Agro Services/Chemical',
      ),
      1555 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101543pos Online',
        'Revenue Name' => 'Agro Services/Chemical Pos Online',
      ),
      1556 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101544',
        'Revenue Name' => 'Pure Water Distributors/Large Wholesale',
      ),
      1557 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101544pos Online',
        'Revenue Name' => 'Pure Water Distributors/Large Wholesale Pos Online',
      ),
      1558 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101545',
        'Revenue Name' => 'Arch Welding Workshop/Showroom',
      ),
      1559 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101545pos Online',
        'Revenue Name' => 'Arch Welding Workshop/Showroom Pos Online',
      ),
      1560 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101546',
        'Revenue Name' => 'Grinding Mills For Soft Grains/Fruits',
      ),
      1561 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101546pos Online',
        'Revenue Name' => 'Grinding Mills For Soft Grains/Fruits Pos Online',
      ),
      1562 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101547',
        'Revenue Name' => 'Grinding Mills (Large)',
      ),
      1563 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101547pos Online',
        'Revenue Name' => 'Grinding Mills (Large) Pos Online',
      ),
      1564 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101548',
        'Revenue Name' => 'Exam Refining Plant/Gas Refilling Plant',
      ),
      1565 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101548pos Online',
        'Revenue Name' => 'Exam Refining Plant/Gas Refilling Plant Pos Online',
      ),
      1566 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101549',
        'Revenue Name' => 'Exam Preparatory/ExtraMoral Studies Centres',
      ),
      1567 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101549pos Online',
        'Revenue Name' => 'Exam Preparatory/ExtraMoral Studies Centres Pos Online',
      ),
      1568 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101550',
        'Revenue Name' => 'Private Tertiary Institution',
      ),
      1569 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101550pos Online',
        'Revenue Name' => 'Private Tertiary Institution Pos Online',
      ),
      1570 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101551',
        'Revenue Name' => 'Water Boreholes (Above 3 Channels)',
      ),
      1571 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101551pos Online',
        'Revenue Name' => 'Water Boreholes (Above 3 Channels) Pos Online',
      ),
      1572 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101552',
        'Revenue Name' => 'Water Boreholes (13 Channels)',
      ),
      1573 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101552pos Online',
        'Revenue Name' => 'Water Boreholes (13 Channels) Pos Online',
      ),
      1574 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101553',
        'Revenue Name' => 'Car Wash (Small)',
      ),
      1575 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101553pos Online',
        'Revenue Name' => 'Car Wash (Small)Pos Online',
      ),
      1576 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101554',
        'Revenue Name' => 'Bush Bar (Large)',
      ),
      1577 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101554pos Online',
        'Revenue Name' => 'Bush Bar (Large) Pos Online',
      ),
      1578 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101555',
        'Revenue Name' => 'Bush Bar (Medium)',
      ),
      1579 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101555pos Online',
        'Revenue Name' => 'Bush Bar (Medium) Pos Online',
      ),
      1580 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101556',
        'Revenue Name' => 'Bush Bar (Small)',
      ),
      1581 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101556pos Online',
        'Revenue Name' => 'Bush Bar (Small) Pos Online',
      ),
      1582 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101557',
        'Revenue Name' => 'Bridal/Rental Service (Big)',
      ),
      1583 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101557pos Online',
        'Revenue Name' => 'Bridal/Rental Service (Big) Pos Online',
      ),
      1584 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101558',
        'Revenue Name' => 'Bridal/Rental Service (Small)',
      ),
      1585 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101558pos Online',
        'Revenue Name' => 'Bridal/Rental Service (Small) Pos Online',
      ),
      1586 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101559',
        'Revenue Name' => 'Sales Of Other (Abada Etc)',
      ),
      1587 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101559pos Online',
        'Revenue Name' => 'Sales Of Other (Abada Etc) Pos Online',
      ),
      1588 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101560',
        'Revenue Name' => 'Hiring Of Other Equipment (Heavy Duty)',
      ),
      1589 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101560pos Online',
        'Revenue Name' => 'Hiring Of Other Equipment (Heavy Duty) Pos Online',
      ),
      1590 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101561',
        'Revenue Name' => 'Hiring Of Other Equipment (Heavy Duty)',
      ),
      1591 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101561pos Online',
        'Revenue Name' => 'Hiring Of Other Equipment (Heavy Duty) Pos Online',
      ),
      1592 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101562',
        'Revenue Name' => 'Phone/Network/Communication Business Outfit (Large)',
      ),
      1593 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101562pos Online',
        'Revenue Name' => 'Phone/Network/Communication Business Outfit (Large) Pos Online',
      ),
      1594 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101563',
        'Revenue Name' => 'Phone/Network/Communication Business Outfit (Medium)',
      ),
      1595 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101563pos Online',
        'Revenue Name' => 'Phone/Network/Communication Business Outfit (Medium) Pos Onlin',
      ),
      1596 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101564',
        'Revenue Name' => 'Phone/Network/Communication Business Outfit (Small)',
      ),
      1597 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101564pos Online',
        'Revenue Name' => 'Phone/Network/Communication Business Outfit (Small) Pos Online',
      ),
      1598 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101565',
        'Revenue Name' => 'Hostel(612 Rooms)',
      ),
      1599 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101565pos Online',
        'Revenue Name' => 'Hostel(612 Rooms) Pos Online',
      ),
      1600 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101566',
        'Revenue Name' => 'Hostel (1240)',
      ),
      1601 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101566pos Online',
        'Revenue Name' => 'Hostel (1240) Pos Online',
      ),
      1602 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101567',
        'Revenue Name' => 'Fashion Designers/Saloon/Tailor(Medium)',
      ),
      1603 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101567pos Online',
        'Revenue Name' => 'Fashion Designers/Saloon/Tailor(Medium) Pos Online',
      ),
      1604 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101568',
        'Revenue Name' => 'Recording/Music Studio (Waxing Store)',
      ),
      1605 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101568pos Online',
        'Revenue Name' => 'Recording/Music Studio (Waxing Store) Pos Online',
      ),
      1606 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101569',
        'Revenue Name' => 'Second Hand Cloth/Bags/Shoes/ (Small)',
      ),
      1607 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101569pos Online',
        'Revenue Name' => 'Second Hand Cloth/Bags/Shoes/ (Small) Pos Online',
      ),
      1608 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101570',
        'Revenue Name' => 'Metal/Steel Fabrication (Underground Tank Constructions)',
      ),
      1609 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101570pos Online',
        'Revenue Name' => 'Metal/Steel Fabrication (Underground Tank Constructions) Pos O',
      ),
      1610 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101571',
        'Revenue Name' => 'Pension Administations/Health Administrators',
      ),
      1611 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101571pos Online',
        'Revenue Name' => 'Pension Administations/Health Administrators Pos Online',
      ),
      1612 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101572',
        'Revenue Name' => 'Spiritualist/Sacremental Religious Articles',
      ),
      1613 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101572pos Online',
        'Revenue Name' => 'Spiritualist/Sacremental Religious Articles Pos Online',
      ),
      1614 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101573',
        'Revenue Name' => 'Spiritualist/Sacremental Religious Articles (Small)',
      ),
      1615 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101573pos Online',
        'Revenue Name' => 'Spiritualist/Sacremental Religious Articles (Small) Pos Online',
      ),
      1616 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101574',
        'Revenue Name' => 'Surface Tank Kerosense Sales',
      ),
      1617 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101574pos Online',
        'Revenue Name' => 'Surface Tank Kerosense Sales Pos Online',
      ),
      1618 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101575',
        'Revenue Name' => 'Cyber Café/Ict Internet Outfits (Above 10 Computers)',
      ),
      1619 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101575pos Online',
        'Revenue Name' => 'Cyber Caf?/Ict Internet Outfits (Above 10 Computers) Pos Onlin',
      ),
      1620 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101576',
        'Revenue Name' => 'Cyber Café/Ict Internet Outfits (610 Computers)',
      ),
      1621 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101576pos Online',
        'Revenue Name' => 'Cyber Caf?/Ict Internet Outfits (610 Computers) Pos Online',
      ),
      1622 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101577',
        'Revenue Name' => 'Cyber Café/Ict Internet Outfits (Less Than 6 Computers)',
      ),
      1623 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101577pos Online',
        'Revenue Name' => 'Cyber Caf?/Ict Internet Outfits (Less Than 6 Computers) Pos On',
      ),
      1624 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101578',
        'Revenue Name' => 'Sales Of Electronic Materials (Large)',
      ),
      1625 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101578pos Online',
        'Revenue Name' => 'Sales Of Electronic Materials (Large) Pos Online',
      ),
      1626 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101579',
        'Revenue Name' => 'Sales Of Electronic Materials (Medium)',
      ),
      1627 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101579pos Online',
        'Revenue Name' => 'Sales Of Electronic Materials (Medium) Pos Online',
      ),
      1628 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101580',
        'Revenue Name' => 'Sales Of Electronic Materials (Small)',
      ),
      1629 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101580pos Online',
        'Revenue Name' => 'Sales Of Electronic Materials (Small) Pos Online',
      ),
      1630 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101581',
        'Revenue Name' => 'Pure Water Distributors/Large Wholesale',
      ),
      1631 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101581pos Online',
        'Revenue Name' => 'Pure Water Distributors/Large Wholesale Pos Online',
      ),
      1632 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101582',
        'Revenue Name' => 'Tailoring Materials (Big)',
      ),
      1633 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101582pos Online',
        'Revenue Name' => 'Tailoring Materials (Big)Pos Online',
      ),
      1634 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101583',
        'Revenue Name' => 'Tailoring Materials (Medium)',
      ),
      1635 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101583pos Online',
        'Revenue Name' => 'Tailoring Materials (Medium) Pos Online',
      ),
      1636 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101584',
        'Revenue Name' => 'Fridge/Air Conditioners/Plumbing Accessories',
      ),
      1637 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101584pos Online',
        'Revenue Name' => 'Fridge/Air Conditioners/Plumbing Accessories Pos Online',
      ),
      1638 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101585',
        'Revenue Name' => 'Boutiques/Shoes/Babies/Fancy (Large)',
      ),
      1639 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101585pos Online',
        'Revenue Name' => 'Boutiques/Shoes/Babies/Fancy (Large) Pos Online',
      ),
      1640 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101586',
        'Revenue Name' => 'Boutiques/Shoes/Babies/Fancy (Medium)',
      ),
      1641 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101586pos Online',
        'Revenue Name' => 'Boutiques/Shoes/Babies/Fancy (Medium) Pos Online',
      ),
      1642 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101587',
        'Revenue Name' => 'Boutiques/Shoes/Babies/Fancy (Small)',
      ),
      1643 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101587pos Online',
        'Revenue Name' => 'Boutiques/Shoes/Babies/Fancy (Small) Pos Online',
      ),
      1644 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101588',
        'Revenue Name' => 'Record Stores/Video/Clubs/Photography (Small)',
      ),
      1645 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101588pos Online',
        'Revenue Name' => 'Record Stores/Video/Clubs/Photography (Small) Pos Online',
      ),
      1646 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101589',
        'Revenue Name' => 'Mechanical/Foundries Tools/Sewage Disposal (Large)',
      ),
      1647 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101589pos Online',
        'Revenue Name' => 'Mechanical/Foundries Tools/Sewage Disposal (Large) Pos Online',
      ),
      1648 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101590',
        'Revenue Name' => 'Mechanical/Foundries Tools/Sewage Disposal (Medium)',
      ),
      1649 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101590pos Online',
        'Revenue Name' => 'Mechanical/Foundries Tools/Sewage Disposal (Medium) Pos Online',
      ),
      1650 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101591',
        'Revenue Name' => 'Mechanical/Foundries Tools/Sewage Disposal (Small)',
      ),
      1651 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101591pos Online',
        'Revenue Name' => 'Mechanical/Foundries Tools/Sewage Disposal (Small) Pos Online',
      ),
      1652 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101592',
        'Revenue Name' => 'Herbalist/Spiritualist/Traditionals/Native Doctor',
      ),
      1653 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101592pos Online',
        'Revenue Name' => 'Herbalist/Spiritualist/Traditionals/Native Doctor Pos Online',
      ),
      1654 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101593',
        'Revenue Name' => 'Business/Vocational Centers/Secretarial Institute (Large)',
      ),
      1655 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101593pos Online',
        'Revenue Name' => 'Business/Vocational Centers/Secretarial Institute (Large) Pos',
      ),
      1656 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101594',
        'Revenue Name' => 'Casket Making Workshop',
      ),
      1657 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101594pos Online',
        'Revenue Name' => 'Casket Making Workshoppos Online',
      ),
      1658 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101595',
        'Revenue Name' => 'Vulcanizes/Battery Charges/Motorcycle/Bicycle Repairs',
      ),
      1659 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101595pos Online',
        'Revenue Name' => 'Vulcanizes/Battery Charges/Motorcycle/Bicycle Repairs Pos Onli',
      ),
      1660 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101596',
        'Revenue Name' => 'Motocycle/Bicycle Spare Parts Dealers',
      ),
      1661 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101596pos Online',
        'Revenue Name' => 'Motocycle/Bicycle Spare Parts Dealers Pos Online',
      ),
      1662 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101597',
        'Revenue Name' => 'Colour Labs/Processing Centers',
      ),
      1663 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101597pos Online',
        'Revenue Name' => 'Colour Labs/Processing Centers Pos Online',
      ),
      1664 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101598',
        'Revenue Name' => 'Garri/Corn Processing Centers',
      ),
      1665 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101598pos Online',
        'Revenue Name' => 'Garri/Corn Processing Centers Pos Online',
      ),
      1666 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101599',
        'Revenue Name' => 'Builders Of Motor Vehicle Bodies',
      ),
      1667 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101599pos Online',
        'Revenue Name' => 'Builders Of Motor Vehicle Bodies Pos Online',
      ),
      1668 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101600',
        'Revenue Name' => 'Aluminium Fillings, Frames Etc',
      ),
      1669 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101600pos Online',
        'Revenue Name' => 'Aluminium Fillings, Frames Etcpos Online',
      ),
      1670 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101601',
        'Revenue Name' => 'Aluminium Fabrications (Big)',
      ),
      1671 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101601pos Online',
        'Revenue Name' => 'Aluminium Fabrications (Big) Pos Online',
      ),
      1672 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101602',
        'Revenue Name' => 'Aluminium Fabrications (Small)',
      ),
      1673 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101602pos Online',
        'Revenue Name' => 'Aluminium Fabrications (Small) Pos Online',
      ),
      1674 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101603',
        'Revenue Name' => 'Metal Fabrication And Construction (Large)',
      ),
      1675 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101603pos Online',
        'Revenue Name' => 'Metal Fabrication And Construction (Large) Pos Online',
      ),
      1676 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101604',
        'Revenue Name' => 'Metal Fabrication And Construction (Small)',
      ),
      1677 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101604pos Online',
        'Revenue Name' => 'Metal Fabrication And Construction (Small) Pos Online',
      ),
      1678 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101605',
        'Revenue Name' => 'Plumbing/Fridge/Air Conditions Accessories',
      ),
      1679 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101605pos Online',
        'Revenue Name' => 'Plumbing/Fridge/Air Conditions Accessories Pos Online',
      ),
      1680 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101606',
        'Revenue Name' => 'Junkyard (Bottle Dealers)',
      ),
      1681 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101606pos Online',
        'Revenue Name' => 'Junkyard (Bottle Dealers) Pos Online',
      ),
      1682 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101607',
        'Revenue Name' => 'Borehole/Water Distribution To Tankers (Big)',
      ),
      1683 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101607pos Online',
        'Revenue Name' => 'Borehole/Water Distribution To Tankers (Big) Pos Online',
      ),
      1684 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101608',
        'Revenue Name' => 'Borehole/Water Distribution To Tankers (Small)',
      ),
      1685 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101608pos Online',
        'Revenue Name' => 'Borehole/Water Distribution To Tankers (Small) Pos Online',
      ),
      1686 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101609',
        'Revenue Name' => 'Cold Houses (Big)',
      ),
      1687 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101609pos Online',
        'Revenue Name' => 'Cold Houses (Big) Pos Online',
      ),
      1688 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101610',
        'Revenue Name' => 'Cold Houses (Small)',
      ),
      1689 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101610pos Online',
        'Revenue Name' => 'Cold Houses (Small) Pos Online',
      ),
      1690 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101611',
        'Revenue Name' => 'Cold Room Shop/Meat Shop (Large)',
      ),
      1691 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101611pos Online',
        'Revenue Name' => 'Cold Room Shop/Meat Shop (Large) Pos Online',
      ),
      1692 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101612',
        'Revenue Name' => 'Cold Room Shop/Meat Shop (Small With One Fridge)',
      ),
      1693 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101612pos Online',
        'Revenue Name' => 'Cold Room Shop/Meat Shop (Small With One Fridge) Pos Online',
      ),
      1694 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101613',
        'Revenue Name' => 'Private Garage (Large)',
      ),
      1695 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101613pos Online',
        'Revenue Name' => 'Private Garage (Large) Pos Online',
      ),
      1696 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101614',
        'Revenue Name' => 'Private Garage (Small)',
      ),
      1697 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101614pos Online',
        'Revenue Name' => 'Private Garage (Small) Pos Online',
      ),
      1698 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101615',
        'Revenue Name' => 'Horticulture/Sales Of Plants Flower/Seeding (Large)',
      ),
      1699 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101615pos Online',
        'Revenue Name' => 'Horticulture/Sales Of Plants Flower/Seeding (Large) Pos Online',
      ),
      1700 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101616',
        'Revenue Name' => 'Horticulture/Sales Of Plants Flower/Seeding (Small)',
      ),
      1701 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101616pos Online',
        'Revenue Name' => 'Horticulture/Sales Of Plants Flower/Seeding (Small) Pos Online',
      ),
      1702 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101617',
        'Revenue Name' => 'Motor License/Emblem Agent',
      ),
      1703 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101617pos Online',
        'Revenue Name' => 'Motor License/Emblem Agent Pos Online',
      ),
      1704 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101618',
        'Revenue Name' => 'Sales Of Pipe Bore/Wall Water',
      ),
      1705 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101618pos Online',
        'Revenue Name' => 'Sales Of Pipe Bore/Wall Water Pos Online',
      ),
      1706 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101619',
        'Revenue Name' => 'Car Wash Service Provider (Large)',
      ),
      1707 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101619pos Online',
        'Revenue Name' => 'Car Wash Service Provider (Large) Pos Online',
      ),
      1708 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101620',
        'Revenue Name' => 'Car Wash Service Provider (Small)',
      ),
      1709 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101620pos Online',
        'Revenue Name' => 'Car Wash Service Provider (Small) Pos Online',
      ),
      1710 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101621',
        'Revenue Name' => 'Second Hand Cloth/Bags/Shoes/ (Large)',
      ),
      1711 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101621pos Online',
        'Revenue Name' => 'Second Hand Cloth/Bags/Shoes/ (Large) Pos Online',
      ),
      1712 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101622',
        'Revenue Name' => 'Second Hand Cloth/Bags/Shoes/ (Medium)',
      ),
      1713 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101622pos Online',
        'Revenue Name' => 'Second Hand Cloth/Bags/Shoes/ (Medium) Pos Online',
      ),
      1714 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101623',
        'Revenue Name' => 'Bottled/Sachet Water (Whole Sale)',
      ),
      1715 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101623pos Online',
        'Revenue Name' => 'Bottled/Sachet Water (Whole Sale)Pos Online',
      ),
      1716 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101624',
        'Revenue Name' => 'Bottled/Sachet Water (Retailers)',
      ),
      1717 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101624pos Online',
        'Revenue Name' => 'Bottled/Sachet Water (Retailers) Pos Online',
      ),
      1718 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101625',
        'Revenue Name' => 'Private Cable Tv Dealers',
      ),
      1719 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101625pos Online',
        'Revenue Name' => 'Private Cable Tv Dealers Pos Online',
      ),
      1720 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101626',
        'Revenue Name' => 'Private Cable Radio Station (Small)',
      ),
      1721 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101626pos Online',
        'Revenue Name' => 'Private Cable Radio Station (Small) Pos Online',
      ),
      1722 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101627',
        'Revenue Name' => 'Private Cable Radio Station (Large)',
      ),
      1723 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101627pos Online',
        'Revenue Name' => 'Private Cable Radio Station (Large) Pos Online',
      ),
      1724 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101628',
        'Revenue Name' => 'Private Airlines Booking Office (Big)',
      ),
      1725 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101628pos Online',
        'Revenue Name' => 'Private Airlines Booking Office (Big) Pos Online',
      ),
      1726 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101629',
        'Revenue Name' => 'Private Airlines Booking Office (Small)',
      ),
      1727 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101629pos Online',
        'Revenue Name' => 'Private Airlines Booking Office (Small) Pos Online',
      ),
      1728 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101630',
        'Revenue Name' => 'Sales Of Plastic Materials (Big)',
      ),
      1729 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101630pos Online',
        'Revenue Name' => 'Sales Of Plastic Materials (Big) Pos Online',
      ),
      1730 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101631',
        'Revenue Name' => 'Sales Of Plastic Materials (Small)',
      ),
      1731 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101631pos Online',
        'Revenue Name' => 'Sales Of Plastic Materials (Small) Pos Online',
      ),
      1732 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101632',
        'Revenue Name' => 'Foodstuff ShopSales In Bags (Large)',
      ),
      1733 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101632pos Online',
        'Revenue Name' => 'Foodstuff ShopSales In Bags (Large) Pos Online',
      ),
      1734 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101633',
        'Revenue Name' => 'Foodstuff/Plastic (Big)',
      ),
      1735 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101633pos Online',
        'Revenue Name' => 'Foodstuff/Plastic (Big)  Pos Online',
      ),
      1736 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101634',
        'Revenue Name' => 'Foodstuff/Plastic (Small)',
      ),
      1737 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101634pos Online',
        'Revenue Name' => 'Foodstuff/Plastic (Small)  Pos Online',
      ),
      1738 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101635',
        'Revenue Name' => 'Consultancy Service Office (Big)',
      ),
      1739 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101635pos Online',
        'Revenue Name' => 'Consultancy Service Office (Big) Pos Online',
      ),
      1740 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101636',
        'Revenue Name' => 'Consultancy Service Office (Medium)',
      ),
      1741 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101636pos Online',
        'Revenue Name' => 'Consultancy Service Office (Medium) Pos Online',
      ),
      1742 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101637',
        'Revenue Name' => 'Consultancy Service Office (Small)',
      ),
      1743 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101637pos Online',
        'Revenue Name' => 'Consultancy Service Office (Small) Pos Online',
      ),
      1744 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101638',
        'Revenue Name' => 'Warehouse/Storage Stall (Large)',
      ),
      1745 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101638pos Online',
        'Revenue Name' => 'Warehouse/Storage Stall (Large) Pos Online',
      ),
      1746 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101639',
        'Revenue Name' => 'Warehouse/Storage Stall (Medium)',
      ),
      1747 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101639pos Online',
        'Revenue Name' => 'Warehouse/Storage Stall (Medium) Pos Online',
      ),
      1748 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101640',
        'Revenue Name' => 'Warehouse/Storage Stall(Medium)',
      ),
      1749 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101640pos Online',
        'Revenue Name' => 'Warehouse/Storage Stall(Medium) Pos Online',
      ),
      1750 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101641',
        'Revenue Name' => 'Glass Shop/Workshop Stall (Big)',
      ),
      1751 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101641pos Online',
        'Revenue Name' => 'Glass Shop/Workshop Stall (Big) Pos Online',
      ),
      1752 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101642',
        'Revenue Name' => 'Glass Shop/Workshop Stall (Small)',
      ),
      1753 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101642pos Online',
        'Revenue Name' => 'Glass Shop/Workshop Stall (Small) Pos Online',
      ),
      1754 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101643',
        'Revenue Name' => 'Gift Shop (Big)',
      ),
      1755 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101643pos Online',
        'Revenue Name' => 'Gift Shop (Big) Pos Online',
      ),
      1756 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101644',
        'Revenue Name' => 'Gift Shop (Small)',
      ),
      1757 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101644pos Online',
        'Revenue Name' => 'Gift Shop (Small) Pos Online',
      ),
      1758 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101645',
        'Revenue Name' => 'Amusement Park (Big)',
      ),
      1759 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101645pos Online',
        'Revenue Name' => 'Amusement Park (Big) Pos Online',
      ),
      1760 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101646',
        'Revenue Name' => 'Amusement Park(Small)',
      ),
      1761 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101646pos Online',
        'Revenue Name' => 'Amusement Park(Small) Pos Online',
      ),
      1762 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101647',
        'Revenue Name' => 'Casket Show Room',
      ),
      1763 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101647pos Online',
        'Revenue Name' => 'Casket Show Room Pos Online',
      ),
      1764 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101648',
        'Revenue Name' => 'Fairly Used Cars Dealers',
      ),
      1765 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101648pos Online',
        'Revenue Name' => 'Fairly Used Cars Dealers Pos Online',
      ),
      1766 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101649',
        'Revenue Name' => 'Roofing Sheet Industry (Big)',
      ),
      1767 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101649pos Online',
        'Revenue Name' => 'Roofing Sheet Industry (Big) Pos Online',
      ),
      1768 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101650',
        'Revenue Name' => 'Roofing Sheet Industry (Small)',
      ),
      1769 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101650pos Online',
        'Revenue Name' => 'Roofing Sheet Industry (Small) Pos Online',
      ),
      1770 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101651',
        'Revenue Name' => 'Computer Game',
      ),
      1771 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101651pos Online',
        'Revenue Name' => 'Computer Gamepos Online',
      ),
      1772 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101652',
        'Revenue Name' => 'Waste Bin Bucket',
      ),
      1773 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101652pos Online',
        'Revenue Name' => 'Waste Bin Bucket Pos Online',
      ),
      1774 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101653',
        'Revenue Name' => 'Waste Bin Bag',
      ),
      1775 => 
      array (
        'Category Code' => '66001001',
        'Category Name' => 'Ministry Of Sanitation And Hygiene',
        'Revenue Code' => '66001001-12101653pos Online',
        'Revenue Name' => 'Waste Bin Bag Pos Online',
      ),
      1776 => 
      array (
        'Category Code' => '55001001',
        'Category Name' => 'Ministry Of Science And Technology',
        'Revenue Code' => '55001001-25501001',
        'Revenue Name' => '5% Wht On Contracts',
      ),
      1777 => 
      array (
        'Category Code' => '55001001',
        'Category Name' => 'Ministry Of Science And Technology',
        'Revenue Code' => '55001001-25501002',
        'Revenue Name' => '10% Tax On Consultants',
      ),
      1778 => 
      array (
        'Category Code' => '55001001',
        'Category Name' => 'Ministry Of Science And Technology',
        'Revenue Code' => '55001001-25501003',
        'Revenue Name' => 'Registration Fee For New Computer/Ict Centre',
      ),
      1779 => 
      array (
        'Category Code' => '55001001',
        'Category Name' => 'Ministry Of Science And Technology',
        'Revenue Code' => '55001001-25501004',
        'Revenue Name' => 'Ict Operational Permit',
      ),
      1780 => 
      array (
        'Category Code' => '55001001',
        'Category Name' => 'Ministry Of Science And Technology',
        'Revenue Code' => '55001001-25501005',
        'Revenue Name' => 'Tender Fees',
      ),
      1781 => 
      array (
        'Category Code' => '55001001',
        'Category Name' => 'Ministry Of Science And Technology',
        'Revenue Code' => '55001001-25501006',
        'Revenue Name' => 'Fines And Penalties',
      ),
      1782 => 
      array (
        'Category Code' => '55001001',
        'Category Name' => 'Ministry Of Science And Technology',
        'Revenue Code' => '55001001-25501007',
        'Revenue Name' => 'Miscellaneous Fees',
      ),
      1783 => 
      array (
        'Category Code' => '55001001',
        'Category Name' => 'Ministry Of Science And Technology',
        'Revenue Code' => '55001001-25501008',
        'Revenue Name' => 'Application Form For Establishment Of Ict Centre',
      ),
      1784 => 
      array (
        'Category Code' => '55001001',
        'Category Name' => 'Ministry Of Science And Technology',
        'Revenue Code' => '55001001-25501009',
        'Revenue Name' => 'Approval Fee For Computer Ict/Cbt Centre',
      ),
      1785 => 
      array (
        'Category Code' => '55001001',
        'Category Name' => 'Ministry Of Science And Technology',
        'Revenue Code' => '55001001-25501010',
        'Revenue Name' => 'Renewal Fee For Computer/Ict Centre',
      ),
      1786 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021001',
        'Revenue Name' => 'Veterinary Clinic Treatment Fees',
      ),
      1787 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021002',
        'Revenue Name' => 'Veterinary Prophylactic Treatment',
      ),
      1788 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021003',
        'Revenue Name' => 'Meat Inspection Fees',
      ),
      1789 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021004',
        'Revenue Name' => 'Fish Pound Inspection Fees',
      ),
      1790 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021005',
        'Revenue Name' => 'Sport Fishery Fees',
      ),
      1791 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021006',
        'Revenue Name' => 'Registration Of Butchers',
      ),
      1792 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021007',
        'Revenue Name' => 'Registration Of Private Slaughter Houses',
      ),
      1793 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021008',
        'Revenue Name' => 'Registration Of Fish Farms/Hatcheries',
      ),
      1794 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021009',
        'Revenue Name' => 'Registration Of Homestead Fish Pond',
      ),
      1795 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021010',
        'Revenue Name' => 'Registration Of Fish Marketer',
      ),
      1796 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021011',
        'Revenue Name' => 'Fish Inspection Fees',
      ),
      1797 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021012',
        'Revenue Name' => 'Registration Of Feed Millers',
      ),
      1798 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021013',
        'Revenue Name' => 'Registration Of Piggeries',
      ),
      1799 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021014',
        'Revenue Name' => 'Registration Of Poulteries',
      ),
      1800 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021015',
        'Revenue Name' => 'Registration Of Poultry Hatcheries',
      ),
      1801 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021016',
        'Revenue Name' => 'Vetrinary Cattle Lairage',
      ),
      1802 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021017',
        'Revenue Name' => 'Registration Of Private Vetrinary Clinic',
      ),
      1803 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021018',
        'Revenue Name' => 'Renewal Of Feed Millers',
      ),
      1804 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021019',
        'Revenue Name' => 'Quarantaine Services',
      ),
      1805 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021020',
        'Revenue Name' => 'Inspection Of Abattoir',
      ),
      1806 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04021021',
        'Revenue Name' => 'Regional/Cattle Markets Application Fees',
      ),
      1807 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04041022',
        'Revenue Name' => 'Sales Of Eggs',
      ),
      1808 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04041023',
        'Revenue Name' => 'Sales Of Fish',
      ),
      1809 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04041024',
        'Revenue Name' => 'Meat Sales',
      ),
      1810 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04041025',
        'Revenue Name' => 'Sales Of Livestock Feeds',
      ),
      1811 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04041026',
        'Revenue Name' => 'Vetrinary Sales Of Livestock Products',
      ),
      1812 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04041027',
        'Revenue Name' => 'Poultry Sales',
      ),
      1813 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04041028',
        'Revenue Name' => 'Livestock Sales Of Breeding Stock',
      ),
      1814 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04041029',
        'Revenue Name' => 'Sales Of Livestock',
      ),
      1815 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04041030',
        'Revenue Name' => 'Proceed From Avutu Poultry',
      ),
      1816 => 
      array (
        'Category Code' => '53001002',
        'Category Name' => 'Ministry Of Live Stock',
        'Revenue Code' => '53001002-04041031',
        'Revenue Name' => 'Sales Of Culled Livestock Poultry Product',
      ),
      1817 => 
      array (
        'Category Code' => '30001002',
        'Category Name' => 'Ministry Of Petroleum Resources',
        'Revenue Code' => '30001002-13411001',
        'Revenue Name' => 'Registration Fee',
      ),
      1818 => 
      array (
        'Category Code' => '30001002',
        'Category Name' => 'Ministry Of Petroleum Resources',
        'Revenue Code' => '30001002-13411002',
        'Revenue Name' => 'Operational Permit',
      ),
      1819 => 
      array (
        'Category Code' => '30001002',
        'Category Name' => 'Ministry Of Petroleum Resources',
        'Revenue Code' => '30001002-13411003',
        'Revenue Name' => 'Petroleum Product Safety Fee (Downstream)',
      ),
      1820 => 
      array (
        'Category Code' => '30001002',
        'Category Name' => 'Ministry Of Petroleum Resources',
        'Revenue Code' => '30001002-13411004',
        'Revenue Name' => 'Petroleum Products Loading Fee',
      ),
      1821 => 
      array (
        'Category Code' => '30001002',
        'Category Name' => 'Ministry Of Petroleum Resources',
        'Revenue Code' => '30001002-13411005',
        'Revenue Name' => 'Petroleum Safety Fee',
      ),
      1822 => 
      array (
        'Category Code' => '30001002',
        'Category Name' => 'Ministry Of Petroleum Resources',
        'Revenue Code' => '30001002-13411006',
        'Revenue Name' => 'Fines And Penalties',
      ),
      1823 => 
      array (
        'Category Code' => '30001002',
        'Category Name' => 'Ministry Of Petroleum Resources',
        'Revenue Code' => '30001002-13411007',
        'Revenue Name' => 'Miscellaneous Fees',
      ),
      1824 => 
      array (
        'Category Code' => '30001002',
        'Category Name' => 'Ministry Of Petroleum Resources',
        'Revenue Code' => '',
        'Revenue Name' => '',
      ),
      1825 => 
      array (
        'Category Code' => '30001002',
        'Category Name' => 'Ministry Of Petroleum Resources',
        'Revenue Code' => '',
        'Revenue Name' => '',
      ),
      1826 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '28002002-13302001',
        'Revenue Name' => '5% Withholding tax on contracts',
      ),
      1827 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '28002002-13302002',
        'Revenue Name' => '10% Tax on consultants',
      ),
      1828 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '28002002-13302003',
        'Revenue Name' => 'Tender fees',
      ),
      1829 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '28002002-13302004',
        'Revenue Name' => 'Application fee of contracts',
      ),
      1830 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '28002002-13302005',
        'Revenue Name' => 'Sale of Hanzard (Bound Volumes)',
      ),
      1831 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '28002002-13302006',
        'Revenue Name' => 'Two (2) canteens (Rental)',
      ),
      1832 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '28002002-13302007',
        'Revenue Name' => 'Hire of open space',
      ),
      1833 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '28002002-13302008',
        'Revenue Name' => 'Sale of application forms for new autonomous communities',
      ),
      1834 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '28002002-13302009',
        'Revenue Name' => 'Sale of scrap materials',
      ),
      1835 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '28002002-13302010',
        'Revenue Name' => 'Certification of official documents',
      ),
      1836 => 
      array (
        'Category Code' => '28002002',
        'Category Name' => 'Imo State House of Assembly',
        'Revenue Code' => '',
        'Revenue Name' => '',
      ),
      1837 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501001',
        'Revenue Name' => '10% WHT CONSULTANCY',
      ),
      1838 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501001 - POS Offline',
        'Revenue Name' => '10% WHT CONSULTANCY - POS OFFLINE',
      ),
      1839 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501001 - POS Online',
        'Revenue Name' => '10% WHT CONSULTANCY - POS ONLINE',
      ),
      1840 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501002',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      1841 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501002 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      1842 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501002 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      1843 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501003',
        'Revenue Name' => 'TENDER FEES',
      ),
      1844 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501003 - POS Offline',
        'Revenue Name' => 'TENDER FEES - POS OFFLINE',
      ),
      1845 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501003 - POS Online',
        'Revenue Name' => 'TENDER FEES - POS ONLINE',
      ),
      1846 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501004',
        'Revenue Name' => 'REGISTRATION FEE',
      ),
      1847 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501004 - POS Offline',
        'Revenue Name' => 'REGISTRATION FEE - POS OFFLINE',
      ),
      1848 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '42001001-14501004 - POS Online',
        'Revenue Name' => '-REGISTRATION FEE - POS ONLINE',
      ),
      1849 => 
      array (
        'Category Code' => '42001001',
        'Category Name' => 'IMO STATE UNIVERSAL BASIC EDUCATION BOARD',
        'Revenue Code' => '',
        'Revenue Name' => '',
      ),
      1850 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601001',
        'Revenue Name' => '10% WHT CONSULTANCY',
      ),
      1851 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601001 - POS Offline',
        'Revenue Name' => '10% WHT CONSULTANCY - POS OFFLINE',
      ),
      1852 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601001 - POS Online',
        'Revenue Name' => '10% WHT CONSULTANCY - POS ONLINE',
      ),
      1853 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601002',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      1854 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601002 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      1855 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601002 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      1856 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601003',
        'Revenue Name' => 'HIRE OF DRILLING RIG',
      ),
      1857 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601003 - POS Offline',
        'Revenue Name' => 'HIRE OF DRILLING RIG - POS OFFLINE',
      ),
      1858 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601003 - POS Online',
        'Revenue Name' => 'HIRE OF DRILLING RIG - POS ONLINE',
      ),
      1859 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601004',
        'Revenue Name' => 'HIRE OF WATER TANKER',
      ),
      1860 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601004 - POS Offline',
        'Revenue Name' => 'HIRE OF WATER TANKER - POS OFFLINE',
      ),
      1861 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601004 - POS Online',
        'Revenue Name' => 'HIRE OF WATER TANKER - POS ONLINE',
      ),
      1862 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601005',
        'Revenue Name' => 'HIRE OF COMPRESSOR',
      ),
      1863 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601005 - POS Offline',
        'Revenue Name' => 'HIRE OF COMPRESSOR - POS OFFLINE',
      ),
      1864 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601005 - POS Online',
        'Revenue Name' => 'HIRE OF COMPRESSOR - POS ONLINE',
      ),
      1865 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601006',
        'Revenue Name' => 'HIRE OF HYDRO FLOW',
      ),
      1866 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601006 - POS Offline',
        'Revenue Name' => 'HIRE OF HYDRO FLOW - POS OFFLINE',
      ),
      1867 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601006 - POS Online',
        'Revenue Name' => 'HIRE OF HYDRO FLOW - POS ONLINE',
      ),
      1868 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601007',
        'Revenue Name' => 'HIRE OF RISER PIPES',
      ),
      1869 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601007 - POS Offline',
        'Revenue Name' => 'HIRE OF RISER PIPES - POS OFFLINE',
      ),
      1870 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601007 - POS Online',
        'Revenue Name' => 'HIRE OF RISER PIPES - POS ONLINE',
      ),
      1871 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601008',
        'Revenue Name' => 'CONTSTRUCTION OF BOREHOLES',
      ),
      1872 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601008 - POS Offline',
        'Revenue Name' => 'CONTSTRUCTION OF BOREHOLES - POS OFFLINE',
      ),
      1873 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601008 - POS Online',
        'Revenue Name' => 'CONTSTRUCTION OF BOREHOLES - POS ONLINE',
      ),
      1874 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601009',
        'Revenue Name' => 'REHABILITATION OF BOREHOLES',
      ),
      1875 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601009 - POS Offline',
        'Revenue Name' => 'REHABILITATION OF BOREHOLES - POS OFFLINE',
      ),
      1876 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601009 - POS Online',
        'Revenue Name' => 'REHABILITATION OF BOREHOLES - POS ONLINE',
      ),
      1877 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601010',
        'Revenue Name' => 'CONSTRUCTION OF OVERHEAD TANK',
      ),
      1878 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601010 - POS Offline',
        'Revenue Name' => 'CONSTRUCTION OF OVERHEAD TANK - POS OFFLINE',
      ),
      1879 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601010 - POS Online',
        'Revenue Name' => 'CONSTRUCTION OF OVERHEAD TANK - POS ONLINE',
      ),
      1880 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601011',
        'Revenue Name' => 'RETICULATION OF WATER LINES',
      ),
      1881 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601011 - POS Offline',
        'Revenue Name' => 'RETICULATION OF WATER LINES - POS OFFLINE',
      ),
      1882 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601011 - POS Online',
        'Revenue Name' => 'RETICULATION OF WATER LINES - POS ONLINE',
      ),
      1883 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601012',
        'Revenue Name' => 'CERTIFICATION AND SUSTAINABILITY CERTIFICATE (BOREHOLE)',
      ),
      1884 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601012 - POS Offline',
        'Revenue Name' => 'CERTIFICATION AND SUSTAINABILITY CERTIFICATE (BOREHOLE) - POS OFFLINE',
      ),
      1885 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601012 - POS Online',
        'Revenue Name' => 'IMO STATE WATER DEV AGENCY-CERTIFICATION AND SUSTAINABILITY CERTIFICATE (BOREHOLE) - POS ONLINE',
      ),
      1886 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601013',
        'Revenue Name' => 'TENDER FEES',
      ),
      1887 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601013 - POS Offline',
        'Revenue Name' => 'TENDER FEES - POS OFFLINE',
      ),
      1888 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601013 - POS Online',
        'Revenue Name' => 'TENDER FEES - POS ONLINE',
      ),
      1889 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601014',
        'Revenue Name' => 'TRAINING AND STANDBY',
      ),
      1890 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601014 - POS Offline',
        'Revenue Name' => 'TRAINING AND STANDBY - POS OFFLINE',
      ),
      1891 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601014 - POS Online',
        'Revenue Name' => 'TRAINING AND STANDBY - POS ONLINE',
      ),
      1892 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601015',
        'Revenue Name' => 'SALES OF SCRAP',
      ),
      1893 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601015 - POS Offline',
        'Revenue Name' => 'SALES OF SCRAP - POS OFFLINE',
      ),
      1894 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601015 - POS Online',
        'Revenue Name' => 'SALES OF SCRAP - POS ONLINE',
      ),
      1895 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601016',
        'Revenue Name' => 'GEOPHYSICAL SURVEY',
      ),
      1896 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601016 - POS Offline',
        'Revenue Name' => 'GEOPHYSICAL SURVEY - POS OFFLINE',
      ),
      1897 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601016 - POS Online',
        'Revenue Name' => 'GEOPHYSICAL SURVEY - POS ONLINE',
      ),
      1898 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601017',
        'Revenue Name' => 'SYNERGY BETWEEN ISSTOWA AND LGDA IN BUILDING PLAN',
      ),
      1899 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601017 - POS Offline',
        'Revenue Name' => 'SYNERGY BETWEEN ISSTOWA AND LGDA IN BUILDING PLAN - POS OFFLINE',
      ),
      1900 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601017 - POS Online',
        'Revenue Name' => 'IMO STATE WATER DEV AGENCY-SYNERGY BETWEEN ISSTOWA AND LGDA IN BUILDING PLAN - POS ONLINE',
      ),
      1901 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601018',
        'Revenue Name' => 'HIRE OF GENERATOR SET',
      ),
      1902 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601018 - POS Offline',
        'Revenue Name' => 'HIRE OF GENERATOR SET - POS OFFLINE',
      ),
      1903 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '43001001-14601018 - POS Online',
        'Revenue Name' => 'HIRE OF GENERATOR SET - POS ONLINE',
      ),
      1904 => 
      array (
        'Category Code' => '43001001',
        'Category Name' => 'IMO STATE WATER DEVELOPMENT AGENCY',
        'Revenue Code' => '',
        'Revenue Name' => '',
      ),
      1905 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801002',
        'Revenue Name' => 'STALLAGE FEE',
      ),
      1906 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801002 - POS Offline',
        'Revenue Name' => 'STALLAGE FEE - POS OFFLINE',
      ),
      1907 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801002 - POS Online',
        'Revenue Name' => 'STALLAGE FEE - POS ONLINE',
      ),
      1908 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801003',
        'Revenue Name' => 'SANITATION FEE',
      ),
      1909 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801003 - POS Offline',
        'Revenue Name' => 'SANITATION FEE - POS OFFLINE',
      ),
      1910 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801003 - POS Online',
        'Revenue Name' => 'SANITATION FEE - POS ONLINE',
      ),
      1911 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801004',
        'Revenue Name' => 'CAPITATION FEE',
      ),
      1912 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801004 - POS Offline',
        'Revenue Name' => 'CAPITATION FEE - POS OFFLINE',
      ),
      1913 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801004 - POS Online',
        'Revenue Name' => 'CAPITATION FEE - POS ONLINE',
      ),
      1914 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801005',
        'Revenue Name' => 'DAILY TOLLS FEES',
      ),
      1915 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801005 - POS Offline',
        'Revenue Name' => 'DAILY TOLLS FEES - POS OFFLINE',
      ),
      1916 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801005 - POS Online',
        'Revenue Name' => 'DAILY TOLLS FEES - POS ONLINE',
      ),
      1917 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801006',
        'Revenue Name' => 'LOADING AND OFF LOADING',
      ),
      1918 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801006 - POS Offline',
        'Revenue Name' => 'LOADING AND OFF LOADING - POS OFFLINE',
      ),
      1919 => 
      array (
        'Category Code' => '45001001',
        'Category Name' => 'MARKET DEVELOPMENT AUTHORITY',
        'Revenue Code' => '45001001-14801006 - POS Online',
        'Revenue Name' => 'LOADING AND OFF LOADING - POS ONLINE',
      ),
      1920 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101001',
        'Revenue Name' => 'OKRO',
      ),
      1921 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101001 - POS Offline',
        'Revenue Name' => 'OKRO - POS OFFLINE',
      ),
      1922 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101001 - POS Online',
        'Revenue Name' => 'OKRO - POS ONLINE',
      ),
      1923 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101002',
        'Revenue Name' => 'MAIZE',
      ),
      1924 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101002 - POS Offline',
        'Revenue Name' => 'MAIZE - POS OFFLINE',
      ),
      1925 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101002 - POS Online',
        'Revenue Name' => 'MAIZE - POS ONLINE',
      ),
      1926 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101003',
        'Revenue Name' => 'CUCUMBER',
      ),
      1927 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101003 - POS Offline',
        'Revenue Name' => 'CUCUMBER - POS OFFLINE',
      ),
      1928 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101003 - POS Online',
        'Revenue Name' => 'CUCUMBER - POS ONLINE',
      ),
      1929 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101004',
        'Revenue Name' => 'WATER MELON',
      ),
      1930 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101004 - POS Offline',
        'Revenue Name' => 'WATER MELON - POS OFFLINE',
      ),
      1931 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101004 - POS Online',
        'Revenue Name' => 'WATER MELON - POS ONLINE',
      ),
      1932 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101005',
        'Revenue Name' => 'PEPPER',
      ),
      1933 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101005 - POS Offline',
        'Revenue Name' => 'PEPPER - POS OFFLINE',
      ),
      1934 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101005 - POS Online',
        'Revenue Name' => 'PEPPER - POS ONLINE',
      ),
      1935 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101006',
        'Revenue Name' => 'VITAMIN A CASSAVA CUTTINGS',
      ),
      1936 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101006 - POS Offline',
        'Revenue Name' => 'VITAMIN A CASSAVA CUTTINGS - POS OFFLINE',
      ),
      1937 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101006 - POS Online',
        'Revenue Name' => 'VITAMIN A CASSAVA CUTTINGS - POS ONLINE',
      ),
      1938 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101007',
        'Revenue Name' => 'OTHER CUTTINGS',
      ),
      1939 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101007 - POS Offline',
        'Revenue Name' => 'OTHER CUTTINGS - POS OFFLINE',
      ),
      1940 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101007 - POS Online',
        'Revenue Name' => 'OTHER CUTTINGS - POS ONLINE',
      ),
      1941 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101008',
        'Revenue Name' => 'PLANTAIN SUCKER',
      ),
      1942 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101008 - POS Offline',
        'Revenue Name' => 'PLANTAIN SUCKER - POS OFFLINE',
      ),
      1943 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101008 - POS Online',
        'Revenue Name' => 'PLANTAIN SUCKER - POS ONLINE',
      ),
      1944 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101009',
        'Revenue Name' => 'OIL PALM SEEDLINGS',
      ),
      1945 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101009 - POS Offline',
        'Revenue Name' => 'OIL PALM SEEDLINGS - POS OFFLINE',
      ),
      1946 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101009 - POS Online',
        'Revenue Name' => 'OIL PALM SEEDLINGS - POS ONLINE',
      ),
      1947 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101010',
        'Revenue Name' => 'FINGERLINGS',
      ),
      1948 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101010 - POS Offline',
        'Revenue Name' => 'FINGERLINGS - POS OFFLINE',
      ),
      1949 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101010 - POS Online',
        'Revenue Name' => 'FINGERLINGS - POS ONLINE',
      ),
      1950 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101011',
        'Revenue Name' => 'POULTRY BROODING',
      ),
      1951 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101011 - POS Offline',
        'Revenue Name' => 'POULTRY BROODING - POS OFFLINE',
      ),
      1952 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101011 - POS Online',
        'Revenue Name' => 'POULTRY BROODING - POS ONLINE',
      ),
      1953 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101012',
        'Revenue Name' => 'COCONUT',
      ),
      1954 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101012 - POS Offline',
        'Revenue Name' => 'COCONUT - POS OFFLINE',
      ),
      1955 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101012 - POS Online',
        'Revenue Name' => 'COCONUT - POS ONLINE',
      ),
      1956 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101013',
        'Revenue Name' => 'BUDDED CITRUS',
      ),
      1957 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101013 - POS Offline',
        'Revenue Name' => 'BUDDED CITRUS - POS OFFLINE',
      ),
      1958 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101013 - POS Online',
        'Revenue Name' => 'BUDDED CITRUS - POS ONLINE',
      ),
      1959 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101014',
        'Revenue Name' => 'GUAVA',
      ),
      1960 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101014 - POS Offline',
        'Revenue Name' => 'GUAVA - POS OFFLINE',
      ),
      1961 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101014 - POS Online',
        'Revenue Name' => 'GUAVA - POS ONLINE',
      ),
      1962 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101015',
        'Revenue Name' => 'HIRING OF TRACTORS(PER DAY)',
      ),
      1963 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101015 - POS Offline',
        'Revenue Name' => 'HIRING OF TRACTORS(PER DAY) - POS OFFLINE',
      ),
      1964 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101015 - POS Online',
        'Revenue Name' => 'HIRING OF TRACTORS(PER DAY) - POS ONLINE',
      ),
      1965 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101016',
        'Revenue Name' => 'HIRING OF GRADER(PER DAY)',
      ),
      1966 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101016 - POS Offline',
        'Revenue Name' => 'HIRING OF GRADER(PER DAY) - POS OFFLINE',
      ),
      1967 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101016 - POS Online',
        'Revenue Name' => 'HIRING OF GRADER(PER DAY) - POS ONLINE',
      ),
      1968 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101017',
        'Revenue Name' => 'HIRING OF HOME ECONOMIC HALL(PER DAY)',
      ),
      1969 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101017 - POS Offline',
        'Revenue Name' => 'HIRING OF HOME ECONOMIC HALL(PER DAY) - POS OFFLINE',
      ),
      1970 => 
      array (
        'Category Code' => '48001001',
        'Category Name' => 'IMO ADP',
        'Revenue Code' => '48001001-15101017 - POS Online',
        'Revenue Name' => 'HIRING OF HOME ECONOMIC HALL(PER DAY) - POS ONLINE',
      ),
      1971 => 
      array (
        'Category Code' => '53001001',
        'Category Name' => 'IMO STATE WASTE MANAGEMENT AGENCY',
        'Revenue Code' => '53001001-15501001',
        'Revenue Name' => 'Waste Disposal Fee',
      ),
      1972 => 
      array (
        'Category Code' => '53001001',
        'Category Name' => 'IMO STATE WASTE MANAGEMENT AGENCY',
        'Revenue Code' => '53001001-15501002',
        'Revenue Name' => 'Sanitation fee',
      ),
      1973 => 
      array (
        'Category Code' => '53001001',
        'Category Name' => 'IMO STATE WASTE MANAGEMENT AGENCY',
        'Revenue Code' => '53001001-15501003',
        'Revenue Name' => 'Sale of Waste Disposal Materials',
      ),
      1974 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401000',
        'Revenue Name' => 'Sale of Houses',
      ),
      1975 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401001',
        'Revenue Name' => 'Ground Rent',
      ),
      1976 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401002',
        'Revenue Name' => 'Tenement Fee',
      ),
      1977 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401003',
        'Revenue Name' => 'Other fees',
      ),
      1978 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401004',
        'Revenue Name' => 'Change of Ownership',
      ),
      1979 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401004-POS Online',
        'Revenue Name' => 'Change of Ownership-POS Online',
      ),
      1980 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401005',
        'Revenue Name' => 'Plan Adoption',
      ),
      1981 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401005-POS Online',
        'Revenue Name' => 'Plan Adoption-POS Online',
      ),
      1982 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401006',
        'Revenue Name' => 'Extension',
      ),
      1983 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401006-POS Online',
        'Revenue Name' => 'Extension-POS Online',
      ),
      1984 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401007',
        'Revenue Name' => 'Search',
      ),
      1985 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401007-POS Online',
        'Revenue Name' => 'Search-POS Online',
      ),
      1986 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401008',
        'Revenue Name' => 'Fencing Permit',
      ),
      1987 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401008-POS Online',
        'Revenue Name' => 'Fencing Permit-POS Online',
      ),
      1988 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401009',
        'Revenue Name' => 'Sublease  Processing',
      ),
      1989 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401009-POS Online',
        'Revenue Name' => 'Sublease  Processing-POS Online',
      ),
      1990 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401010',
        'Revenue Name' => 'Change of Roof',
      ),
      1991 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401010-POS Online',
        'Revenue Name' => 'Change of Roof-POS Online',
      ),
      1992 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401011',
        'Revenue Name' => 'All Approvals',
      ),
      1993 => 
      array (
        'Category Code' => '53101003',
        'Category Name' => 'IMO STATE HOUSING CORPORATION',
        'Revenue Code' => '53101003-15401011-POS Online',
        'Revenue Name' => 'All Approvals-POS Online',
      ),
      1994 => 
      array (
        'Category Code' => '53101004',
        'Category Name' => 'Imo State Investment Promotion Agency (ISIPA)',
        'Revenue Code' => '53101004-15501001',
        'Revenue Name' => 'Business Registration Fee',
      ),
      1995 => 
      array (
        'Category Code' => '53101004',
        'Category Name' => 'Imo State Investment Promotion Agency (ISIPA)',
        'Revenue Code' => '53101004-15501002',
        'Revenue Name' => 'Other Fees',
      ),
      1996 => 
      array (
        'Category Code' => '53101004',
        'Category Name' => 'Imo State Investment Promotion Agency (ISIPA)',
        'Revenue Code' => '53101004-15501003',
        'Revenue Name' => 'Business Registration/Digitalization of all business in the Statemotion Agency (ISIPA)-Busines',
      ),
      1997 => 
      array (
        'Category Code' => '54001001',
        'Category Name' => 'IMO STATE WATER AND SEWAGE CORPORATION',
        'Revenue Code' => '54001001-25401001',
        'Revenue Name' => 'Water Rate',
      ),
      1998 => 
      array (
        'Category Code' => '54001001',
        'Category Name' => 'IMO STATE WATER AND SEWAGE CORPORATION',
        'Revenue Code' => '54001001-25401002',
        'Revenue Name' => 'New Water Connection',
      ),
      1999 => 
      array (
        'Category Code' => '54001001',
        'Category Name' => 'IMO STATE WATER AND SEWAGE CORPORATION',
        'Revenue Code' => '54001001-25401003',
        'Revenue Name' => 'Sales of Water by Tanker/Water Shed',
      ),
      2000 => 
      array (
        'Category Code' => '54001001',
        'Category Name' => 'IMO STATE WATER AND SEWAGE CORPORATION',
        'Revenue Code' => '54001001-25401004',
        'Revenue Name' => 'Charge for Borehole Analysis',
      ),
      2001 => 
      array (
        'Category Code' => '54001001',
        'Category Name' => 'IMO STATE WATER AND SEWAGE CORPORATION',
        'Revenue Code' => '54001001-25401005',
        'Revenue Name' => 'Service Charge for Extension Works/Materials',
      ),
      2002 => 
      array (
        'Category Code' => '54001001',
        'Category Name' => 'IMO STATE WATER AND SEWAGE CORPORATION',
        'Revenue Code' => '54001001-25401006',
        'Revenue Name' => 'Registration of Contractors and Renewal/Forms',
      ),
      2003 => 
      array (
        'Category Code' => '54001001',
        'Category Name' => 'IMO STATE WATER AND SEWAGE CORPORATION',
        'Revenue Code' => '54001001-25401007',
        'Revenue Name' => 'Penalty on Illegal Connection/Legalization',
      ),
      2004 => 
      array (
        'Category Code' => '54001001',
        'Category Name' => 'IMO STATE WATER AND SEWAGE CORPORATION',
        'Revenue Code' => '54001001-25401008',
        'Revenue Name' => 'Outdoor Advert',
      ),
      2005 => 
      array (
        'Category Code' => '63001003',
        'Category Name' => 'DEVELOPMENT FINANCE AND INVESTMENT COMPANY LIMITED',
        'Revenue Code' => '63001003-14041031',
        'Revenue Name' => 'Dividend Income',
      ),
      2006 => 
      array (
        'Category Code' => '63001003',
        'Category Name' => 'DEVELOPMENT FINANCE AND INVESTMENT COMPANY LIMITED',
        'Revenue Code' => '63001003-14041032',
        'Revenue Name' => 'Other Income',
      ),
      2007 => 
      array (
        'Category Code' => '63002004',
        'Category Name' => 'IMO STATE SOCIAL SERVICES STABILIZATION FUND BOARD',
        'Revenue Code' => '63002004-15041000',
        'Revenue Name' => 'Donations',
      ),
      2008 => 
      array (
        'Category Code' => '63002004',
        'Category Name' => 'IMO STATE SOCIAL SERVICES STABILIZATION FUND BOARD',
        'Revenue Code' => '63002004-15041001',
        'Revenue Name' => 'Social Service Levy',
      ),
      2009 => 
      array (
        'Category Code' => '63002004',
        'Category Name' => 'IMO STATE SOCIAL SERVICES STABILIZATION FUND BOARD',
        'Revenue Code' => '63002004-15041002',
        'Revenue Name' => 'Rental Income',
      ),
      2010 => 
      array (
        'Category Code' => '63002004',
        'Category Name' => 'IMO STATE SOCIAL SERVICES STABILIZATION FUND BOARD',
        'Revenue Code' => '63002004-15041003',
        'Revenue Name' => 'Other revenue',
      ),
      2011 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101654',
        'Revenue Name' => 'School Tuition Fee',
      ),
      2012 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101654POS online',
        'Revenue Name' => 'School Tuition FeePOS online',
      ),
      2013 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101655',
        'Revenue Name' => 'Other Fees/Non Imo Fees',
      ),
      2014 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101655POS online',
        'Revenue Name' => 'Other Fees/Non Imo FeesPOS online',
      ),
      2015 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101656',
        'Revenue Name' => 'Student Accommodation Fees',
      ),
      2016 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101656POS online',
        'Revenue Name' => 'Student Accommodation FeesPOS online',
      ),
      2017 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101657',
        'Revenue Name' => 'Students Games',
      ),
      2018 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101657POS online',
        'Revenue Name' => 'Students GamesPOS online',
      ),
      2019 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101658',
        'Revenue Name' => 'Examination',
      ),
      2020 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101658POS online',
        'Revenue Name' => 'ExaminationPOS online',
      ),
      2021 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101659',
        'Revenue Name' => 'Library Fees',
      ),
      2022 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101659POS online',
        'Revenue Name' => 'Library FeesPOS online',
      ),
      2023 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101660',
        'Revenue Name' => 'Medical',
      ),
      2024 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101660POS online',
        'Revenue Name' => 'MedicalPOS online',
      ),
      2025 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101661',
        'Revenue Name' => 'Information Technology Fees',
      ),
      2026 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101661POS online',
        'Revenue Name' => 'Information Technology FeesPOS online',
      ),
      2027 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101662',
        'Revenue Name' => 'Hiring of Academic Gowns',
      ),
      2028 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101662POS online',
        'Revenue Name' => 'Hiring of Academic GownsPOS online',
      ),
      2029 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101663',
        'Revenue Name' => 'ID Cards',
      ),
      2030 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101663POS online',
        'Revenue Name' => 'ID CardsPOS online',
      ),
      2031 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101664',
        'Revenue Name' => 'Development Fees',
      ),
      2032 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101664POS online',
        'Revenue Name' => 'Development FeesPOS online',
      ),
      2033 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101665',
        'Revenue Name' => 'Certificate Verification',
      ),
      2034 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101665POS online',
        'Revenue Name' => 'Certificate VerificationPOS online',
      ),
      2035 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101666',
        'Revenue Name' => 'Acceptance Fee',
      ),
      2036 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101666POS online',
        'Revenue Name' => 'Acceptance FeePOS online',
      ),
      2037 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101667',
        'Revenue Name' => 'Affiliation Fee',
      ),
      2038 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101667POS online',
        'Revenue Name' => 'Affiliation FeePOS online',
      ),
      2039 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101668',
        'Revenue Name' => 'Teaching Equipment',
      ),
      2040 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101668POS online',
        'Revenue Name' => 'Teaching EquipmentPOS online',
      ),
      2041 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101669',
        'Revenue Name' => 'Internet Services',
      ),
      2042 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101669POS online',
        'Revenue Name' => 'Internet ServicesPOS online',
      ),
      2043 => 
      array (
        'Category Code' => '67001001',
        'Category Name' => 'Imo State College of Education Ihitte-Uboma',
        'Revenue Code' => '67001001-12101670',
        'Revenue Name' => 'Students Handbook',
      ),
      2044 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101670',
        'Revenue Name' => 'Application Fee',
      ),
      2045 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101670POS online',
        'Revenue Name' => 'Application FeePOS online',
      ),
      2046 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101671',
        'Revenue Name' => 'License/ Operating Permit Fee',
      ),
      2047 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101671POS online',
        'Revenue Name' => 'License/ Operating Permit FeePOS online',
      ),
      2048 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101672',
        'Revenue Name' => 'Renewal of License/ Operating permit Fee',
      ),
      2049 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101672POS online',
        'Revenue Name' => 'Renewal of License/ Operating permit FeePOS online',
      ),
      2050 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101673',
        'Revenue Name' => 'Agents Lottery Outlet Permit Fee',
      ),
      2051 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101673POS online',
        'Revenue Name' => 'Agents Lottery Outlet Permit FeePOS online',
      ),
      2052 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101674',
        'Revenue Name' => 'Agents Lottery Outlet Renewal Fee',
      ),
      2053 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101674POS online',
        'Revenue Name' => 'Agents Lottery Outlet Renewal FeePOS online',
      ),
      2054 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101675',
        'Revenue Name' => 'Gaming Tax Fee',
      ),
      2055 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101675POS online',
        'Revenue Name' => 'Gaming Tax FeePOS online',
      ),
      2056 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101676',
        'Revenue Name' => 'Gaming Test Lab Fees',
      ),
      2057 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101676POS online',
        'Revenue Name' => 'Gaming Test Lab FeesPOS online',
      ),
      2058 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101677',
        'Revenue Name' => 'Sanctions and Contravention Fee',
      ),
      2059 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101677POS online',
        'Revenue Name' => 'Sanctions and Contravention FeePOS online',
      ),
      2060 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101678',
        'Revenue Name' => 'Staff Income Tax',
      ),
      2061 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101678POS online',
        'Revenue Name' => 'Staff Income TaxPOS online',
      ),
      2062 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101679',
        'Revenue Name' => 'Others Fees',
      ),
      2063 => 
      array (
        'Category Code' => '68001001',
        'Category Name' => 'Imo State Lottery Board',
        'Revenue Code' => '68001001-12101679POS online',
        'Revenue Name' => 'Others FeesPOS online',
      ),
      2064 => 
      array (
        'Category Code' => '71001001',
        'Category Name' => 'Imo State College of Advance Profession Studies',
        'Revenue Code' => '71001001-12101771',
        'Revenue Name' => 'Renting of Spaces and Building',
      ),
      2065 => 
      array (
        'Category Code' => '71001001',
        'Category Name' => 'Imo State College of Advance Profession Studies',
        'Revenue Code' => '71001001-12101771POS online',
        'Revenue Name' => 'Renting of Spaces and BuildingPOS online',
      ),
      2066 => 
      array (
        'Category Code' => '73001001',
        'Category Name' => 'Imo State Petroleum Administration and Development',
        'Revenue Code' => '73001001-12101774',
        'Revenue Name' => 'Tender Fee',
      ),
      2067 => 
      array (
        'Category Code' => '73001001',
        'Category Name' => 'Imo State Petroleum Administration and Development',
        'Revenue Code' => '73001001-12101775',
        'Revenue Name' => 'contract Registration Fee',
      ),
      2068 => 
      array (
        'Category Code' => '73001001',
        'Category Name' => 'Imo State Petroleum Administration and Development',
        'Revenue Code' => '73001001-12101776',
        'Revenue Name' => 'PAYE (Personal Income Tax)',
      ),
      2069 => 
      array (
        'Category Code' => '73001001',
        'Category Name' => 'Imo State Petroleum Administration and Development',
        'Revenue Code' => '73001001-12101777',
        'Revenue Name' => 'Withholding Tax (WHT)',
      ),
      2070 => 
      array (
        'Category Code' => '74001001',
        'Category Name' => 'Imo State Judiciary',
        'Revenue Code' => '74001001-12101778',
        'Revenue Name' => 'Fee and Charges from State High Court',
      ),
      2071 => 
      array (
        'Category Code' => '74001001',
        'Category Name' => 'Imo State Judiciary',
        'Revenue Code' => '74001001-12101779',
        'Revenue Name' => 'Fee and Charges from Magistrate Court',
      ),
      2072 => 
      array (
        'Category Code' => '74001001',
        'Category Name' => 'Imo State Judiciary',
        'Revenue Code' => '74001001-12101780',
        'Revenue Name' => 'Fee and Charges from Customary Court of Appeal',
      ),
      2073 => 
      array (
        'Category Code' => '74001001',
        'Category Name' => 'Imo State Judiciary',
        'Revenue Code' => '74001001-12101781',
        'Revenue Name' => 'Fee and Charges from Marriage Registries',
      ),
      2074 => 
      array (
        'Category Code' => '74011001',
        'Category Name' => 'Imo State Council and Arts and Culture',
        'Revenue Code' => '74001001-12101774POS online',
        'Revenue Name' => 'OMENIMO THEATRE TROUPEPOS online',
      ),
      2075 => 
      array (
        'Category Code' => '74011001',
        'Category Name' => 'Imo State Council and Arts and Culture',
        'Revenue Code' => '74001001-12101775',
        'Revenue Name' => 'Hire Of Omenimo Troupe',
      ),
      2076 => 
      array (
        'Category Code' => '74011001',
        'Category Name' => 'Imo State Council and Arts and Culture',
        'Revenue Code' => '74001001-12101776',
        'Revenue Name' => 'Schools Excursion',
      ),
      2077 => 
      array (
        'Category Code' => '74011001',
        'Category Name' => 'Imo State Council and Arts and Culture',
        'Revenue Code' => '74001001-12101777',
        'Revenue Name' => 'Affliction of Group Artistes/Registration & Renewal',
      ),
      2078 => 
      array (
        'Category Code' => '74011001',
        'Category Name' => 'Imo State Council and Arts and Culture',
        'Revenue Code' => '74001101-12101778',
        'Revenue Name' => 'Research at ISCAC Library',
      ),
      2079 => 
      array (
        'Category Code' => '74011001',
        'Category Name' => 'Imo State Council and Arts and Culture',
        'Revenue Code' => '74001101-12101779',
        'Revenue Name' => 'Sale from Mbari Artshop',
      ),
      2080 => 
      array (
        'Category Code' => '74011001',
        'Category Name' => 'Imo State Council and Arts and Culture',
        'Revenue Code' => '74001101-12101780',
        'Revenue Name' => 'Use of ISCAC Space',
      ),
      2081 => 
      array (
        'Category Code' => '74011001',
        'Category Name' => 'Imo State Council and Arts and Culture',
        'Revenue Code' => '74011001-12101774',
        'Revenue Name' => 'OMENIMO THEATRE TROUPE',
      ),
      2082 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001001',
        'Revenue Name' => 'INFORMAL SECTOR REVENUE',
      ),
      2083 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001001 - POS Offline',
        'Revenue Name' => 'INFORMAL SECTOR REVENUE - POS OFFLINE',
      ),
      2084 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001001 - POS Online',
        'Revenue Name' => 'INFORMAL SECTOR REVENUE - POS ONLINE',
      ),
      2085 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001002',
        'Revenue Name' => 'IMO STATE LGA ACCOUNT',
      ),
      2086 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001002 - POS Offline',
        'Revenue Name' => 'IMO STATE LGA ACCOUNT - POS OFFLINE',
      ),
      2087 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001002 - POS Online',
        'Revenue Name' => 'IMO STATE LGA ACCOUNT - POS ONLINE',
      ),
      2088 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001003',
        'Revenue Name' => 'SALE OF L INDICATOR',
      ),
      2089 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001003 - POS Offline',
        'Revenue Name' => 'SALE OF L INDICATOR - POS OFFLINE',
      ),
      2090 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001003 - POS Online',
        'Revenue Name' => 'SALE OF L INDICATOR - POS ONLINE',
      ),
      2091 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001004',
        'Revenue Name' => '10% WHT ON BANK INTEREST-PMTS',
      ),
      2092 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001004 - POS Offline',
        'Revenue Name' => '10% WHT ON BANK INTEREST - PMTS - POS OFFLINE',
      ),
      2093 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001004 - POS Online',
        'Revenue Name' => '10% WHT ON BANK INTEREST - PMTS - POS ONLINE',
      ),
      2094 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001005',
        'Revenue Name' => '10% WHT ON DIRECTORS FEES-',
      ),
      2095 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001005 - POS Offline',
        'Revenue Name' => '10% WHT ON DIRECTORS FEES - POS OFFLINE',
      ),
      2096 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001005 - POS Online',
        'Revenue Name' => '10% WHT ON DIRECTORS FEES - POS ONLINE',
      ),
      2097 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001006',
        'Revenue Name' => '10% WHT ON DIVIDENDS',
      ),
      2098 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001006 - POS Offline',
        'Revenue Name' => '10% WHT ON DIVIDENDS - POS OFFLINE',
      ),
      2099 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001006 - POS Online',
        'Revenue Name' => '10% WHT ON DIVIDENDS - POS ONLINE',
      ),
      2100 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001007',
        'Revenue Name' => '10% WHT ON PLANT & EQUIP RENTAL',
      ),
      2101 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001007 - POS Offline',
        'Revenue Name' => '10% WHT ON PLANT & EQUIP RENTAL - POS OFFLINE',
      ),
      2102 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001007 - POS Online',
        'Revenue Name' => '10% WHT ON PLANT & EQUIP RENTAL - POS ONLINE',
      ),
      2103 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001008',
        'Revenue Name' => '10% WHT ON RENTS',
      ),
      2104 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001008 - POS Offline',
        'Revenue Name' => '10% WHT ON RENTS - POS OFFLINE',
      ),
      2105 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001008 - POS Online',
        'Revenue Name' => '10% WHT ON RENTS - POS ONLINE',
      ),
      2106 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001009',
        'Revenue Name' => '10% WHT ON ROYAL TIES',
      ),
      2107 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001009 - POS Offline',
        'Revenue Name' => '10% WHT ON ROYAL TIES - POS OFFLINE',
      ),
      2108 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001009 - POS Online',
        'Revenue Name' => '10% WHT ON ROYAL TIES - POS ONLINE',
      ),
      2109 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001010',
        'Revenue Name' => '10% WITHHOLDING TAX ON DEPOSIT/SAVINGS',
      ),
      2110 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001010 - POS Offline',
        'Revenue Name' => '10% WITHHOLDING TAX ON DEPOSIT/SAVINGS - POS OFFLINE',
      ),
      2111 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001010 - POS Online',
        'Revenue Name' => '10% WITHHOLDING TAX ON DEPOSIT/SAVINGS - POS ONLINE',
      ),
      2112 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001011',
        'Revenue Name' => '10% WITHHOLDING TAX ON DIVIDENDS',
      ),
      2113 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001011 - POS Offline',
        'Revenue Name' => '10% WITHHOLDING TAX ON DIVIDENDS - POS OFFLINE',
      ),
      2114 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001011 - POS Online',
        'Revenue Name' => '10% WITHHOLDING TAX ON DIVIDENDS - POS ONLINE',
      ),
      2115 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001012',
        'Revenue Name' => '10% WITHHOLDING TAX ON RENTS',
      ),
      2116 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001012 - POS Offline',
        'Revenue Name' => '10% WITHHOLDING TAX ON RENTS - POS OFFLINE',
      ),
      2117 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001012 - POS Online',
        'Revenue Name' => '10% WITHHOLDING TAX ON RENTS - POS ONLINE',
      ),
      2118 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001013',
        'Revenue Name' => '10% WITHHOLDING TAX ON ROYALTIES',
      ),
      2119 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001013 - POS Offline',
        'Revenue Name' => '10% WITHHOLDING TAX ON ROYALTIES - POS OFFLINE',
      ),
      2120 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001013 - POS Online',
        'Revenue Name' => '10% WITHHOLDING TAX ON ROYALTIES - POS ONLINE',
      ),
      2121 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001014',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      2122 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001014 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      2123 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001014 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      2124 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001015',
        'Revenue Name' => 'ADMINISTRATIVE CHARGE',
      ),
      2125 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001015 - POS Offline',
        'Revenue Name' => 'ADMINISTRATIVE CHARGE - POS OFFLINE',
      ),
      2126 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001015 - POS Online',
        'Revenue Name' => 'ADMINISTRATIVE CHARGE - POS ONLINE',
      ),
      2127 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001016',
        'Revenue Name' => 'ADVERTISEMENT TAX',
      ),
      2128 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001016 - POS Offline',
        'Revenue Name' => 'ADVERTISEMENT TAX - POS OFFLINE',
      ),
      2129 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001016 - POS Online',
        'Revenue Name' => 'ADVERTISEMENT TAX - POS ONLINE',
      ),
      2130 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001017',
        'Revenue Name' => 'APPEALS',
      ),
      2131 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001017 - POS Offline',
        'Revenue Name' => 'APPEALS - POS OFFLINE',
      ),
      2132 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001017 - POS Online',
        'Revenue Name' => 'APPEALS - POS ONLINE',
      ),
      2133 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001018',
        'Revenue Name' => 'APPLICATION FORMS FOR DRIVERS LICENSE',
      ),
      2134 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001018 - POS Offline',
        'Revenue Name' => 'APPLICATION FORMS FOR DRIVERS LICENSE - POS OFFLINE',
      ),
      2135 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001018 - POS Online',
        'Revenue Name' => 'APPLICATION FORMS FOR DRIVERS LICENSE - POS ONLINE',
      ),
      2136 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001019',
        'Revenue Name' => 'ARREARS OF 5% WHT FROM LOCAL GOVTS',
      ),
      2137 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001019 - POS Offline',
        'Revenue Name' => 'ARREARS OF 5% WHT FROM LOCAL GOVTS - POS OFFLINE',
      ),
      2138 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001019 - POS Online',
        'Revenue Name' => 'ARREARS OF 5% WHT FROM LOCAL GOVTS - POS ONLINE',
      ),
      2139 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001020',
        'Revenue Name' => 'BIR TRADING ACCOUNT',
      ),
      2140 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001020 - POS Offline',
        'Revenue Name' => 'BIR TRADING ACCOUNT - POS OFFLINE',
      ),
      2141 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001020 - POS Online',
        'Revenue Name' => 'BIR TRADING ACCOUNT - POS ONLINE',
      ),
      2142 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001021',
        'Revenue Name' => 'BIR VEHICLE ADMINISTRATION',
      ),
      2143 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001021 - POS Offline',
        'Revenue Name' => 'BIR VEHICLE ADMINISTRATION - POS OFFLINE',
      ),
      2144 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001021 - POS Online',
        'Revenue Name' => 'BIR VEHICLE ADMINISTRATION - POS ONLINE',
      ),
      2145 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001022',
        'Revenue Name' => 'CAPITAL GAINS TAX',
      ),
      2146 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001022 - POS Offline',
        'Revenue Name' => 'CAPITAL GAINS TAX - POS OFFLINE',
      ),
      2147 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001022 - POS Online',
        'Revenue Name' => 'CAPITAL GAINS TAX - POS ONLINE',
      ),
      2148 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001023',
        'Revenue Name' => 'CAPITAL TRANSFER TAX',
      ),
      2149 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001023 - POS Offline',
        'Revenue Name' => 'CAPITAL TRANSFER TAX - POS OFFLINE',
      ),
      2150 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001023 - POS Online',
        'Revenue Name' => 'CAPITAL TRANSFER TAX - POS ONLINE',
      ),
      2151 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001024',
        'Revenue Name' => 'CASINO LICENSES',
      ),
      2152 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001024 - POS Offline',
        'Revenue Name' => 'CASINO LICENSES - POS OFFLINE',
      ),
      2153 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001024 - POS Online',
        'Revenue Name' => 'CASINO LICENSES - POS ONLINE',
      ),
      2154 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001025',
        'Revenue Name' => 'CASINO TAX',
      ),
      2155 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001025 - POS Offline',
        'Revenue Name' => 'CASINO TAX - POS OFFLINE',
      ),
      2156 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001025 - POS Online',
        'Revenue Name' => 'CASINO TAX - POS ONLINE',
      ),
      2157 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001026',
        'Revenue Name' => 'CHANGE OF OWNERSHIP',
      ),
      2158 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001026 - POS Offline',
        'Revenue Name' => 'CHANGE OF OWNERSHIP - POS OFFLINE',
      ),
      2159 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001026 - POS Online',
        'Revenue Name' => 'CHANGE OF OWNERSHIP - POS ONLINE',
      ),
      2160 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001027',
        'Revenue Name' => 'CONSUMPTION TAX',
      ),
      2161 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001027 - POS Offline',
        'Revenue Name' => 'CONSUMPTION TAX - POS OFFLINE',
      ),
      2162 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001027 - POS Online',
        'Revenue Name' => 'CONSUMPTION TAX - POS ONLINE',
      ),
      2163 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001028',
        'Revenue Name' => 'COPYRIGHT SOCIETY OF NIGERIA',
      ),
      2164 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001028 - POS Offline',
        'Revenue Name' => 'COPYRIGHT SOCIETY OF NIGERIA - POS OFFLINE',
      ),
      2165 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001028 - POS Online',
        'Revenue Name' => 'COPYRIGHT SOCIETY OF NIGERIA - POS ONLINE',
      ),
      2166 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001029',
        'Revenue Name' => 'DEALERS LICENCES',
      ),
      2167 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001029 - POS Offline',
        'Revenue Name' => 'DEALERS LICENCES - POS OFFLINE',
      ),
      2168 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001029 - POS Online',
        'Revenue Name' => 'DEALERS LICENCES - POS ONLINE',
      ),
      2169 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001030',
        'Revenue Name' => 'DIRECT ASSESSMENT TAX',
      ),
      2170 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001030 - POS Offline',
        'Revenue Name' => 'DIRECT ASSESSMENT TAX - POS OFFLINE',
      ),
      2171 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001030 - POS Online',
        'Revenue Name' => 'DIRECT ASSESSMENT TAX - POS ONLINE',
      ),
      2172 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001031',
        'Revenue Name' => 'DIRECT ASSESSMENT TAX ARREARS',
      ),
      2173 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001031 - POS Offline',
        'Revenue Name' => 'DIRECT ASSESSMENT TAX ARREARS - POS OFFLINE',
      ),
      2174 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001031 - POS Online',
        'Revenue Name' => 'DIRECT ASSESSMENT TAX ARREARS - POS ONLINE',
      ),
      2175 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001032',
        'Revenue Name' => 'DRIVERS COMPETENCE TEST/TRAINING',
      ),
      2176 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001032 - POS Offline',
        'Revenue Name' => 'DRIVERS COMPETENCE TEST/TRAINING - POS OFFLINE',
      ),
      2177 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001032 - POS Online',
        'Revenue Name' => 'DRIVERS COMPETENCE TEST/TRAINING - POS ONLINE',
      ),
      2178 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001033',
        'Revenue Name' => 'DRIVING SCHOOL REGISTRATION',
      ),
      2179 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001033 - POS Offline',
        'Revenue Name' => 'DRIVING SCHOOL REGISTRATION - POS OFFLINE',
      ),
      2180 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001033 - POS Online',
        'Revenue Name' => 'DRIVING SCHOOL REGISTRATION - POS ONLINE',
      ),
      2181 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001034',
        'Revenue Name' => 'ENTERTAINMET TAX',
      ),
      2182 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001034 - POS Offline',
        'Revenue Name' => 'ENTERTAINMET TAX - POS OFFLINE',
      ),
      2183 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001034 - POS Online',
        'Revenue Name' => 'ENTERTAINMET TAX - POS ONLINE',
      ),
      2184 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001035',
        'Revenue Name' => 'ENVIRONMENTAL REGULATIONS',
      ),
      2185 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001035 - POS Offline',
        'Revenue Name' => 'ENVIRONMENTAL REGULATIONS - POS OFFLINE',
      ),
      2186 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001035 - POS Online',
        'Revenue Name' => 'ENVIRONMENTAL REGULATIONS - POS ONLINE',
      ),
      2187 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001036',
        'Revenue Name' => 'E-TCC PF',
      ),
      2188 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001036 - POS Offline',
        'Revenue Name' => 'E - TCC PF - POS OFFLINE',
      ),
      2189 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001036 - POS Online',
        'Revenue Name' => 'E - TCC PF - POS ONLINE',
      ),
      2190 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001037',
        'Revenue Name' => 'GAMING LICENCES',
      ),
      2191 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001037 - POS Offline',
        'Revenue Name' => 'GAMING LICENCES - POS OFFLINE',
      ),
      2192 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001037 - POS Online',
        'Revenue Name' => 'GAMING LICENCES - POS ONLINE',
      ),
      2193 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001038',
        'Revenue Name' => 'HOLDING ACCOUNT',
      ),
      2194 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001038 - POS Offline',
        'Revenue Name' => 'HOLDING ACCOUNT - POS OFFLINE',
      ),
      2195 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001038 - POS Online',
        'Revenue Name' => 'HOLDING ACCOUNT - POS ONLINE',
      ),
      2196 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001039',
        'Revenue Name' => 'HOTEL REGISTRATION FEES',
      ),
      2197 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001039 - POS Offline',
        'Revenue Name' => 'HOTEL REGISTRATION FEES - POS OFFLINE',
      ),
      2198 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001039 - POS Online',
        'Revenue Name' => 'HOTEL REGISTRATION FEES - POS ONLINE',
      ),
      2199 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001040',
        'Revenue Name' => 'IDENTIFICATION OF MOTOR VEHICLES',
      ),
      2200 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001040 - POS Offline',
        'Revenue Name' => 'IDENTIFICATION OF MOTOR VEHICLES - POS OFFLINE',
      ),
      2201 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001040 - POS Online',
        'Revenue Name' => 'IDENTIFICATION OF MOTOR VEHICLES - POS ONLINE',
      ),
      2202 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001041',
        'Revenue Name' => 'LOTTERY COMMISSION',
      ),
      2203 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001041 - POS Offline',
        'Revenue Name' => 'LOTTERY COMMISSION - POS OFFLINE',
      ),
      2204 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001041 - POS Online',
        'Revenue Name' => 'LOTTERY COMMISSION - POS ONLINE',
      ),
      2205 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001042',
        'Revenue Name' => 'MOTOR DRIVERS LICENSE',
      ),
      2206 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001042 - POS Offline',
        'Revenue Name' => 'MOTOR DRIVERS LICENSE - POS OFFLINE',
      ),
      2207 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001042 - POS Online',
        'Revenue Name' => 'MOTOR DRIVERS LICENSE - POS ONLINE',
      ),
      2208 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001043',
        'Revenue Name' => 'MOTOR VEHICLE LICENSE',
      ),
      2209 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001043 - POS Offline',
        'Revenue Name' => 'MOTOR VEHICLE LICENSE - POS OFFLINE',
      ),
      2210 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001043 - POS Online',
        'Revenue Name' => 'MOTOR VEHICLE LICENSE - POS ONLINE',
      ),
      2211 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001044',
        'Revenue Name' => 'OTHER FEES',
      ),
      2212 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001044 - POS Offline',
        'Revenue Name' => 'OTHER FEES - POS OFFLINE',
      ),
      2213 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001044 - POS Online',
        'Revenue Name' => 'OTHER FEES - POS ONLINE',
      ),
      2214 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001045',
        'Revenue Name' => 'PAYE',
      ),
      2215 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001045 - POS Offline',
        'Revenue Name' => 'PAYE - POS OFFLINE',
      ),
      2216 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001045 - POS Online',
        'Revenue Name' => 'PAYE - POS ONLINE',
      ),
      2217 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001046',
        'Revenue Name' => 'PAYE - ARREAERS',
      ),
      2218 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001046 - POS Offline',
        'Revenue Name' => 'PAYE  -  ARREAERS - POS OFFLINE',
      ),
      2219 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001046 - POS Online',
        'Revenue Name' => 'PAYE  -  ARREAERS - POS ONLINE',
      ),
      2220 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001047',
        'Revenue Name' => 'PENALTIES',
      ),
      2221 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001047 - POS Offline',
        'Revenue Name' => 'PENALTIES - POS OFFLINE',
      ),
      2222 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001047 - POS Online',
        'Revenue Name' => 'PENALTIES - POS ONLINE',
      ),
      2223 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001048',
        'Revenue Name' => 'POC - PROOF OF OWNERSHIP',
      ),
      2224 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001048 - POS Offline',
        'Revenue Name' => 'POC  -  PROOF OF OWNERSHIP - POS OFFLINE',
      ),
      2225 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001048 - POS Online',
        'Revenue Name' => 'POC  -  PROOF OF OWNERSHIP - POS ONLINE',
      ),
      2226 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001049',
        'Revenue Name' => 'POLLUTION DISCHARGE CHARGES',
      ),
      2227 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001049 - POS Offline',
        'Revenue Name' => 'POLLUTION DISCHARGE CHARGES - POS OFFLINE',
      ),
      2228 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001049 - POS Online',
        'Revenue Name' => 'POLLUTION DISCHARGE CHARGES - POS ONLINE',
      ),
      2229 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001050',
        'Revenue Name' => 'POOLS BETTING LICENCES',
      ),
      2230 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001050 - POS Offline',
        'Revenue Name' => 'POOLS BETTING LICENCES - POS OFFLINE',
      ),
      2231 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001050 - POS Online',
        'Revenue Name' => 'POOLS BETTING LICENCES - POS ONLINE',
      ),
      2232 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001051',
        'Revenue Name' => 'POOLS BETTING TAX',
      ),
      2233 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001051 - POS Offline',
        'Revenue Name' => 'POOLS BETTING TAX - POS OFFLINE',
      ),
      2234 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001051 - POS Online',
        'Revenue Name' => 'POOLS BETTING TAX - POS ONLINE',
      ),
      2235 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001052',
        'Revenue Name' => 'REMBURSEMENT FROM EDUCATION RATE FUND ACCOUNT',
      ),
      2236 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001052 - POS Offline',
        'Revenue Name' => 'REMBURSEMENT FROM EDUCATION RATE FUND ACCOUNT - POS OFFLINE',
      ),
      2237 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001052 - POS Online',
        'Revenue Name' => 'REMBURSEMENT FROM EDUCATION RATE FUND ACCOUNT - POS ONLINE',
      ),
      2238 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001053',
        'Revenue Name' => 'ROAD TRAFFIC EXAMINATION FEES',
      ),
      2239 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001053 - POS Offline',
        'Revenue Name' => 'ROAD TRAFFIC EXAMINATION FEES - POS OFFLINE',
      ),
      2240 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001053 - POS Online',
        'Revenue Name' => 'ROAD TRAFFIC EXAMINATION FEES - POS ONLINE',
      ),
      2241 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001054',
        'Revenue Name' => 'SALE OF DRIVERS LICENCE BOOKLETS',
      ),
      2242 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001054 - POS Offline',
        'Revenue Name' => 'SALE OF DRIVERS LICENCE BOOKLETS - POS OFFLINE',
      ),
      2243 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001054 - POS Online',
        'Revenue Name' => 'SALE OF DRIVERS LICENCE BOOKLETS - POS ONLINE',
      ),
      2244 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001055',
        'Revenue Name' => 'SALE OF EMBLEMS FOR COMMERCIAL VEHICLES',
      ),
      2245 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001055 - POS Offline',
        'Revenue Name' => 'SALE OF EMBLEMS FOR COMMERCIAL VEHICLES - POS OFFLINE',
      ),
      2246 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001055 - POS Online',
        'Revenue Name' => 'SALE OF EMBLEMS FOR COMMERCIAL VEHICLES - POS ONLINE',
      ),
      2247 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001056',
        'Revenue Name' => 'SALE OF FORMS FOR MOTOR VEHICLE',
      ),
      2248 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001056 - POS Offline',
        'Revenue Name' => 'SALE OF FORMS FOR MOTOR VEHICLE - POS OFFLINE',
      ),
      2249 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001056 - POS Online',
        'Revenue Name' => 'SALE OF FORMS FOR MOTOR VEHICLE - POS ONLINE',
      ),
      2250 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001057',
        'Revenue Name' => 'SALE OF HACKNEY AND STAGE CARRIAGE BADGES',
      ),
      2251 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001057 - POS Offline',
        'Revenue Name' => 'SALE OF HACKNEY AND STAGE CARRIAGE BADGES - POS OFFLINE',
      ),
      2252 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001057 - POS Online',
        'Revenue Name' => 'SALE OF HACKNEY AND STAGE CARRIAGE BADGES - POS ONLINE',
      ),
      2253 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001058',
        'Revenue Name' => 'SALE OF L INDICATOR',
      ),
      2254 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001058 - POS Offline',
        'Revenue Name' => 'SALE OF L INDICATOR - POS OFFLINE',
      ),
      2255 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001058 - POS Online',
        'Revenue Name' => 'SALE OF L INDICATOR - POS ONLINE',
      ),
      2256 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001059',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS',
      ),
      2257 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001059 - POS Offline',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS OFFLINE',
      ),
      2258 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001059 - POS Online',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS ONLINE',
      ),
      2259 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001060',
        'Revenue Name' => 'SALE OF PROOF OF OWNERSHIP-',
      ),
      2260 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001060 - POS Offline',
        'Revenue Name' => 'SALE OF PROOF OF OWNERSHIP - POS OFFLINE',
      ),
      2261 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001060 - POS Online',
        'Revenue Name' => 'SALE OF PROOF OF OWNERSHIP - POS ONLINE',
      ),
      2262 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001061',
        'Revenue Name' => 'SALE OF VEHICLE PLATE NUMBER',
      ),
      2263 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001061 - POS Offline',
        'Revenue Name' => 'SALE OF VEHICLE PLATE NUMBER - POS OFFLINE',
      ),
      2264 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001061 - POS Online',
        'Revenue Name' => 'SALE OF VEHICLE PLATE NUMBER - POS ONLINE',
      ),
      2265 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001062',
        'Revenue Name' => 'SALE OF VEHICLE REGISTRATION BOOKS-',
      ),
      2266 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001062 - POS Offline',
        'Revenue Name' => 'SALE OF VEHICLE REGISTRATION BOOKS - POS OFFLINE',
      ),
      2267 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001062 - POS Online',
        'Revenue Name' => 'SALE OF VEHICLE REGISTRATION BOOKS - POS ONLINE',
      ),
      2268 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001063',
        'Revenue Name' => 'SALES OF APPLICATION FORMS FOR GAMING LICENCES',
      ),
      2269 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001063 - POS Offline',
        'Revenue Name' => 'SALES OF APPLICATION FORMS FOR GAMING LICENCES - POS OFFLINE',
      ),
      2270 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001063 - POS Online',
        'Revenue Name' => 'SALES OF APPLICATION FORMS FOR GAMING LICENCES - POS ONLINE',
      ),
      2271 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001064',
        'Revenue Name' => 'SLOT MACHINE',
      ),
      2272 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001064 - POS Offline',
        'Revenue Name' => 'SLOT MACHINE - POS OFFLINE',
      ),
      2273 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001064 - POS Online',
        'Revenue Name' => 'SLOT MACHINE - POS ONLINE',
      ),
      2274 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001065',
        'Revenue Name' => 'UNIFIED L.G.A. CERTIFICATE FOR LEGION',
      ),
      2275 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001065 - POS Offline',
        'Revenue Name' => 'UNIFIED L.G.A. CERTIFICATE FOR LEGION - POS OFFLINE',
      ),
      2276 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001065 - POS Online',
        'Revenue Name' => 'UNIFIED L.G.A. CERTIFICATE FOR LEGION - POS ONLINE',
      ),
      2277 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001066',
        'Revenue Name' => 'VALUE ADDED TAX',
      ),
      2278 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001066 - POS Offline',
        'Revenue Name' => 'VALUE ADDED TAX - POS OFFLINE',
      ),
      2279 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001066 - POS Online',
        'Revenue Name' => 'VALUE ADDED TAX - POS ONLINE',
      ),
      2280 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001067',
        'Revenue Name' => 'ZOO',
      ),
      2281 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001067 - POS Offline',
        'Revenue Name' => 'ZOO - POS OFFLINE',
      ),
      2282 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001067 - POS Online',
        'Revenue Name' => 'ZOO - POS ONLINE',
      ),
      2283 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001068',
        'Revenue Name' => 'ADMINISTRATIVE FEES',
      ),
      2284 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001068 - POS Offline',
        'Revenue Name' => 'ADMINISTRATIVE FEES - POS OFFLINE',
      ),
      2285 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001068 - POS Online',
        'Revenue Name' => 'ADMINISTRATIVE FEES - POS ONLINE',
      ),
      2286 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001069',
        'Revenue Name' => 'ENVIRONMENTAL STANDARDS ENFORCEMENT / AUDIT',
      ),
      2287 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001069 - POS Offline',
        'Revenue Name' => 'ENVIRONMENTAL STANDARDS ENFORCEMENT / AUDIT - POS OFFLINE',
      ),
      2288 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001069 - POS Online',
        'Revenue Name' => 'ENVIRONMENTAL STANDARDS ENFORCEMENT / AUDIT - POS ONLINE',
      ),
      2289 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001070',
        'Revenue Name' => 'ROAD WORTHINESS FEE',
      ),
      2290 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001070 - POS Offline',
        'Revenue Name' => 'ROAD WORTHINESS FEE - POS OFFLINE',
      ),
      2291 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001070 - POS Online',
        'Revenue Name' => 'ROAD WORTHINESS FEE - POS ONLINE',
      ),
      2292 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001071',
        'Revenue Name' => 'Vehicle License Payment',
      ),
      2293 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001071 - POS Offline',
        'Revenue Name' => 'Vehicle License Payment - POS OFFLINE',
      ),
      2294 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001071 - POS Online',
        'Revenue Name' => 'Vehicle License Payment - POS ONLINE',
      ),
      2295 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001072',
        'Revenue Name' => 'DREDGING FEES',
      ),
      2296 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001072 - POS Offline',
        'Revenue Name' => 'DREDGING FEES - POS OFFLINE',
      ),
      2297 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001072 - POS Online',
        'Revenue Name' => 'DREDGING FEES - POS ONLINE',
      ),
      2298 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001073',
        'Revenue Name' => 'TAMA (PAYEE)',
      ),
      2299 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001073 - POS Offline',
        'Revenue Name' => 'TAMA (PAYEE) - POS OFFLINE',
      ),
      2300 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001073 - POS Online',
        'Revenue Name' => 'TAMA (PAYEE) - POS ONLINE',
      ),
      2301 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001074',
        'Revenue Name' => 'BOARD OF INTERNAL REVENUE -TAMA (STAMP DUTY)',
      ),
      2302 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001074 - POS Offline',
        'Revenue Name' => 'TAMA (STAMP DUTY) - POS OFFLINE',
      ),
      2303 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001074 - POS Online',
        'Revenue Name' => 'TAMA (STAMP DUTY) - POS ONLINE',
      ),
      2304 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001075',
        'Revenue Name' => 'BOARD OF INTERNAL REVENUE -TAMA (WITHHOLDING TAX)',
      ),
      2305 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001075 - POS Offline',
        'Revenue Name' => 'TAMA (WITHHOLDING TAX) - POS OFFLINE',
      ),
      2306 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001075 - POS Online',
        'Revenue Name' => 'TAMA (WITHHOLDING TAX) - POS ONLINE',
      ),
      2307 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001076',
        'Revenue Name' => 'VIO ENFORCEMENT FEES',
      ),
      2308 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001076 - POS Offline',
        'Revenue Name' => 'VIO ENFORCEMENT FEES - POS OFFLINE',
      ),
      2309 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001076 - POS Online',
        'Revenue Name' => 'VIO ENFORCEMENT FEES - POS ONLINE',
      ),
      2310 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001077',
        'Revenue Name' => 'TENDER FEES',
      ),
      2311 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001077 - POS Offline',
        'Revenue Name' => 'TENDER FEES - POS OFFLINE',
      ),
      2312 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001077 - POS Online',
        'Revenue Name' => 'TENDER FEES - POS ONLINE',
      ),
      2313 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001078',
        'Revenue Name' => 'DEVELOPMENT LEVY',
      ),
      2314 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001078 - POS Offline',
        'Revenue Name' => 'DEVELOPMENT LEVY - POS OFFLINE',
      ),
      2315 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001078 - POS Online',
        'Revenue Name' => 'DEVELOPMENT LEVY - POS ONLINE',
      ),
      2316 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001079',
        'Revenue Name' => 'THIRD PARTY/OUT DOOR ADVERT',
      ),
      2317 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001079 - POS Offline',
        'Revenue Name' => 'THIRD PARTY/OUT DOOR ADVERT - POS OFFLINE',
      ),
      2318 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001079 - POS Online',
        'Revenue Name' => 'THIRD PARTY/OUT DOOR ADVERT - POS ONLINE',
      ),
      2319 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001080',
        'Revenue Name' => 'DEBT RECOVERY',
      ),
      2320 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001080 - POS Offline',
        'Revenue Name' => 'DEBT RECOVERY - POS OFFLINE',
      ),
      2321 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001080 - POS Online',
        'Revenue Name' => 'DEBT RECOVERY - POS ONLINE',
      ),
      2322 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001081',
        'Revenue Name' => 'VEHICLE INSURANCE PROCEEDS',
      ),
      2323 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001081 - POS Offline',
        'Revenue Name' => 'VEHICLE INSURANCE PROCEEDS - POS OFFLINE',
      ),
      2324 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001081 - POS Online',
        'Revenue Name' => 'VEHICLE INSURANCE PROCEEDS - POS ONLINE',
      ),
      2325 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001082',
        'Revenue Name' => 'WHT ARREARS',
      ),
      2326 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001082 - POS Offline',
        'Revenue Name' => 'WHT ARREARS - POS OFFLINE',
      ),
      2327 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001082 - POS Online',
        'Revenue Name' => 'WHT ARREARS - POS ONLINE',
      ),
      2328 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001083',
        'Revenue Name' => 'DEBT RECOVERY',
      ),
      2329 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001083 - POS Offline',
        'Revenue Name' => 'DEBT RECOVERY - POS OFFLINE',
      ),
      2330 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001083 - POS Online',
        'Revenue Name' => 'DEBT RECOVERY - POS ONLINE',
      ),
      2331 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001084',
        'Revenue Name' => 'STAMP DUTIES AND PENALTIES',
      ),
      2332 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001084 - POS Offline',
        'Revenue Name' => 'STAMP DUTIES AND PENALTIES - POS OFFLINE',
      ),
      2333 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001084 - POS Online',
        'Revenue Name' => 'STAMP DUTIES AND PENALTIES - POS ONLINE',
      ),
      2334 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001085',
        'Revenue Name' => 'Haulage, Livestock & Produce',
      ),
      2335 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001086',
        'Revenue Name' => 'Consolidated Revenue for Association of Table Water Producers',
      ),
      2336 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001087',
        'Revenue Name' => 'Consolidated Revenue for Association of Bakers and Caterers',
      ),
      2337 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001088',
        'Revenue Name' => 'Consolidated Revenue for National Union of Road Transport Workers',
      ),
      2338 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001089',
        'Revenue Name' => 'Consolidated Revenue for Imo Motorcyclists Association',
      ),
      2339 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001090',
        'Revenue Name' => 'Consolidated Revenue for Tricycle Operators Association',
      ),
      2340 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001091',
        'Revenue Name' => 'Consolidated Revenue for Performing Musicians Association (PMAN)',
      ),
      2341 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001092',
        'Revenue Name' => 'Consolidated Revenue for Association of Community Pharmacist',
      ),
      2342 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001093',
        'Revenue Name' => 'Concessioning of Government Business',
      ),
      2343 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001094',
        'Revenue Name' => 'Consolidated Revenue for National Association of Microfinance Banks',
      ),
      2344 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001096',
        'Revenue Name' => 'Motor Vehicle Insurance - financo',
      ),
      2345 => 
      array (
        'Category Code' => '26001001',
        'Category Name' => 'BOARD OF INTERNAL REVENUE',
        'Revenue Code' => '26001001-13001096-POS Online',
        'Revenue Name' => 'Motor Vehicle Insurance - financo-POS Online',
      ),
      2346 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031001',
        'Revenue Name' => 'INTRA TRANSFER OF SERVICE',
      ),
      2347 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031001 - POS Offline',
        'Revenue Name' => 'INTRA TRANSFER OF SERVICE - POS OFFLINE',
      ),
      2348 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031001 - POS Online',
        'Revenue Name' => 'INTRA TRANSFER OF SERVICE - POS ONLINE',
      ),
      2349 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031002',
        'Revenue Name' => 'INTRA TRANSFER OF SERVICE (SNR)',
      ),
      2350 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031002 - POS Offline',
        'Revenue Name' => 'INTRA TRANSFER OF SERVICE (SNR) - POS OFFLINE',
      ),
      2351 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031002 - POS Online',
        'Revenue Name' => 'INTRA TRANSFER OF SERVICE (SNR) - POS ONLINE',
      ),
      2352 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031003',
        'Revenue Name' => 'INTRA TRANSFER OF SERVICE (JNR)',
      ),
      2353 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031003 - POS Offline',
        'Revenue Name' => 'INTRA TRANSFER OF SERVICE (JNR) - POS OFFLINE',
      ),
      2354 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031003 - POS Online',
        'Revenue Name' => 'INTRA TRANSFER OF SERVICE (JNR) - POS ONLINE',
      ),
      2355 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031004',
        'Revenue Name' => '10% WHT ON CONSULTANTS',
      ),
      2356 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031004 - POS Offline',
        'Revenue Name' => '10% WHT ON CONSULTANTS - POS OFFLINE',
      ),
      2357 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031004 - POS Online',
        'Revenue Name' => '10% WHT ON CONSULTANTS - POS ONLINE',
      ),
      2358 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031005',
        'Revenue Name' => 'TRANSFER OF SERVICE',
      ),
      2359 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031005 - POS Offline',
        'Revenue Name' => 'TRANSFER OF SERVICE - POS OFFLINE',
      ),
      2360 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031005 - POS Online',
        'Revenue Name' => 'TRANSFER OF SERVICE - POS ONLINE',
      ),
      2361 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031006',
        'Revenue Name' => 'SALE OF GOVERNMENT PROPERTY',
      ),
      2362 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031006 - POS Offline',
        'Revenue Name' => 'SALE OF GOVERNMENT PROPERTY - POS OFFLINE',
      ),
      2363 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031006 - POS Online',
        'Revenue Name' => 'SALE OF GOVERNMENT PROPERTY - POS ONLINE',
      ),
      2364 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031007',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      2365 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031007 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      2366 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031007 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      2367 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031008',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS',
      ),
      2368 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031008 - POS Offline',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS OFFLINE',
      ),
      2369 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031008 - POS Online',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS ONLINE',
      ),
      2370 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031009',
        'Revenue Name' => 'SALE OF EMPLOYMENT FORMS',
      ),
      2371 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031009 - POS Offline',
        'Revenue Name' => 'SALE OF EMPLOYMENT FORMS - POS OFFLINE',
      ),
      2372 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031009 - POS Online',
        'Revenue Name' => 'SALE OF EMPLOYMENT FORMS - POS ONLINE',
      ),
      2373 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031010',
        'Revenue Name' => 'SALES OF ANNUAL REPORTS AND BULLETINS',
      ),
      2374 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031010 - POS Offline',
        'Revenue Name' => 'SALES OF ANNUAL REPORTS AND BULLETINS - POS OFFLINE',
      ),
      2375 => 
      array (
        'Category Code' => '12001001',
        'Category Name' => 'CIVIL SERVICE COMMISSION',
        'Revenue Code' => '12001001-12031010 - POS Online',
        'Revenue Name' => 'SALES OF ANNUAL REPORTS AND BULLETINS - POS ONLINE',
      ),
      2376 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202001',
        'Revenue Name' => 'AFFILIATION FEES FOR CONTRACTORS',
      ),
      2377 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202001 - POS Offline',
        'Revenue Name' => 'AFFILIATION FEES FOR CONTRACTORS - POS OFFLINE',
      ),
      2378 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202001 - POS Online',
        'Revenue Name' => 'AFFILIATION FEES FOR CONTRACTORS - POS ONLINE',
      ),
      2379 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202002',
        'Revenue Name' => 'OTHER FEES',
      ),
      2380 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202002 - POS Offline',
        'Revenue Name' => 'OTHER FEES - POS OFFLINE',
      ),
      2381 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202002 - POS Online',
        'Revenue Name' => 'OTHER FEES - POS ONLINE',
      ),
      2382 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202003',
        'Revenue Name' => 'PETITION FEES',
      ),
      2383 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202003 - POS Offline',
        'Revenue Name' => 'PETITION FEES - POS OFFLINE',
      ),
      2384 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202003 - POS Online',
        'Revenue Name' => 'PETITION FEES - POS ONLINE',
      ),
      2385 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202005',
        'Revenue Name' => 'TENDER FEES',
      ),
      2386 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202005 - POS Offline',
        'Revenue Name' => 'TENDER FEES - POS OFFLINE',
      ),
      2387 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202005 - POS Online',
        'Revenue Name' => 'TENDER FEES - POS ONLINE',
      ),
      2388 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202007',
        'Revenue Name' => 'IMO STATE HOUSE OF ASSEMBLY',
      ),
      2389 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202007 - POS Offline',
        'Revenue Name' => 'POS OFFLINE',
      ),
      2390 => 
      array (
        'Category Code' => '28002001',
        'Category Name' => 'HOUSE OF ASSEMBLY SERVICE COMMISSION',
        'Revenue Code' => '28002001-13202007 - POS Online',
        'Revenue Name' => 'POS ONLINE',
      ),
      2391 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601001',
        'Revenue Name' => 'TRAFFIC OFFENSE',
      ),
      2392 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601001 - POS Offline',
        'Revenue Name' => 'TRAFFIC OFFENSE - POS OFFLINE',
      ),
      2393 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601001 - POS Online',
        'Revenue Name' => 'TRAFFIC OFFENSE - POS ONLINE',
      ),
      2394 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601002',
        'Revenue Name' => 'DREDGING',
      ),
      2395 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601002 - POS Offline',
        'Revenue Name' => 'DREDGING - POS OFFLINE',
      ),
      2396 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601002 - POS Online',
        'Revenue Name' => 'DREDGING - POS ONLINE',
      ),
      2397 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601003',
        'Revenue Name' => 'FINES (ENTRACO)',
      ),
      2398 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601003 - POS Offline',
        'Revenue Name' => 'FINES (ENTRACO) - POS OFFLINE',
      ),
      2399 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601003 - POS Online',
        'Revenue Name' => 'FINES (ENTRACO) - POS ONLINE',
      ),
      2400 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601004',
        'Revenue Name' => 'FUMIGATION FEES',
      ),
      2401 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601004 - POS Offline',
        'Revenue Name' => 'FUMIGATION FEES - POS OFFLINE',
      ),
      2402 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601004 - POS Online',
        'Revenue Name' => 'FUMIGATION FEES - POS ONLINE',
      ),
      2403 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601005',
        'Revenue Name' => 'OTHERS (ENTRACO)',
      ),
      2404 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601005 - POS Offline',
        'Revenue Name' => 'OTHERS (ENTRACO) - POS OFFLINE',
      ),
      2405 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601005 - POS Online',
        'Revenue Name' => 'OTHERS (ENTRACO) - POS ONLINE',
      ),
      2406 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601006',
        'Revenue Name' => 'PEST/VECTOR CONTROL FEES',
      ),
      2407 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601006 - POS Offline',
        'Revenue Name' => 'PEST/VECTOR CONTROL FEES - POS OFFLINE',
      ),
      2408 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601006 - POS Online',
        'Revenue Name' => 'PEST/VECTOR CONTROL FEES - POS ONLINE',
      ),
      2409 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601007',
        'Revenue Name' => 'POLLUTION',
      ),
      2410 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601007 - POS Offline',
        'Revenue Name' => 'POLLUTION - POS OFFLINE',
      ),
      2411 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601007 - POS Online',
        'Revenue Name' => 'POLLUTION - POS ONLINE',
      ),
      2412 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601008',
        'Revenue Name' => 'SANITATION FEES',
      ),
      2413 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601008 - POS Offline',
        'Revenue Name' => 'SANITATION FEES - POS OFFLINE',
      ),
      2414 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601008 - POS Online',
        'Revenue Name' => 'SANITATION FEES - POS ONLINE',
      ),
      2415 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601009',
        'Revenue Name' => 'SEWAGE',
      ),
      2416 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601009 - POS Offline',
        'Revenue Name' => 'SEWAGE - POS OFFLINE',
      ),
      2417 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601009 - POS Online',
        'Revenue Name' => 'SEWAGE - POS ONLINE',
      ),
      2418 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601010',
        'Revenue Name' => 'ABATEMENT OFFENCES/FINES',
      ),
      2419 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601010 - POS Offline',
        'Revenue Name' => 'ABATEMENT OFFENCES/FINES - POS OFFLINE',
      ),
      2420 => 
      array (
        'Category Code' => '32001001',
        'Category Name' => 'IMO ENTRACO',
        'Revenue Code' => '32001001-13601010 - POS Online',
        'Revenue Name' => 'ABATEMENT OFFENCES/FINES - POS ONLINE',
      ),
      2421 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401001',
        'Revenue Name' => 'LICENSE FEES FOR PERMISSION TO DISPLAY BILLBOARD/ SIGNAGES',
      ),
      2422 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401001 - POS Offline',
        'Revenue Name' => 'LICENSE FEES FOR PERMISSION TO DISPLAY BILLBOARD/ SIGNAGES  - POS OFFLINE',
      ),
      2423 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401001 - POS Online',
        'Revenue Name' => 'LICENSE FEES FOR PERM TO DISPLAY BILLBOARD/ SIGNAGES  - POS ONLINE',
      ),
      2424 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401002',
        'Revenue Name' => '5% WITHHOLDING TAX ON CONTRACTS',
      ),
      2425 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401002 - POS Offline',
        'Revenue Name' => '5% WITHHOLDING TAX ON CONTRACTS - POS OFFLINE',
      ),
      2426 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401002 - POS Online',
        'Revenue Name' => '5% WITHHOLDING TAX ON CONTRACTS - POS ONLINE',
      ),
      2427 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401003',
        'Revenue Name' => '10% WITHHOLDING TAX ON CONSULTING FEE',
      ),
      2428 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401003 - POS Offline',
        'Revenue Name' => '10% WITHHOLDING TAX ON CONSULTING FEE - POS OFFLINE',
      ),
      2429 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401003 - POS Online',
        'Revenue Name' => '10% WITHHOLDING TAX ON CONSULTING FEE - POS ONLINE',
      ),
      2430 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401004',
        'Revenue Name' => 'FINE/FEE',
      ),
      2431 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401004 - POS Offline',
        'Revenue Name' => 'FINE/FEE - POS OFFLINE',
      ),
      2432 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401004 - POS Online',
        'Revenue Name' => 'FINE/FEE - POS ONLINE',
      ),
      2433 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401005',
        'Revenue Name' => 'TENDER FEE',
      ),
      2434 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401005 - POS Offline',
        'Revenue Name' => 'TENDER FEE - POS OFFLINE',
      ),
      2435 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401005 - POS Online',
        'Revenue Name' => 'TENDER FEE - POS ONLINE',
      ),
      2436 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401006',
        'Revenue Name' => 'BULK ADVERTISEMENT',
      ),
      2437 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401006 - POS Offline',
        'Revenue Name' => 'BULK ADVERTISEMENT - POS OFFLINE',
      ),
      2438 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401006 - POS Online',
        'Revenue Name' => 'BULK ADVERTISEMENT - POS ONLINE',
      ),
      2439 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401007',
        'Revenue Name' => 'PENALTY FEE',
      ),
      2440 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401007 - POS Offline',
        'Revenue Name' => 'PENALTY FEE - POS OFFLINE',
      ),
      2441 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401007 - POS Online',
        'Revenue Name' => 'PENALTY FEE - POS ONLINE',
      ),
      2442 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401008',
        'Revenue Name' => '1st party Registrations',
      ),
      2443 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401008 - POS Offline',
        'Revenue Name' => '1st party Registrations - POS OFFLINE',
      ),
      2444 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401008 - POS Online',
        'Revenue Name' => '1st party Registrations - POS ONLINE',
      ),
      2445 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401009',
        'Revenue Name' => '1st Party/Corporations Signage Rates',
      ),
      2446 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401009 - POS Offline',
        'Revenue Name' => '1st Party/Corporations Signage Rates - POS OFFLINE',
      ),
      2447 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401009 - POS Online',
        'Revenue Name' => '1st Party/Corporations Signage Rates - POS ONLINE',
      ),
      2448 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401010',
        'Revenue Name' => '1st Party/Hotels & Filling Stations Rates',
      ),
      2449 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401010 - POS Offline',
        'Revenue Name' => '1st Party/Hotels & Filling Stations Rates - POS OFFLINE',
      ),
      2450 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401010 - POS Online',
        'Revenue Name' => '1st Party/Hotels & Filling Stations Rates - POS ONLINE',
      ),
      2451 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401011',
        'Revenue Name' => 'SME Signage Rates',
      ),
      2452 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401011 - POS Offline',
        'Revenue Name' => 'SME Signage Rates - POS OFFLINE',
      ),
      2453 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401011 - POS Online',
        'Revenue Name' => 'SME Signage Rates - POS ONLINE',
      ),
      2454 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401012',
        'Revenue Name' => 'Temporary Signages',
      ),
      2455 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401012 - POS Offline',
        'Revenue Name' => 'Temporary Signages - POS OFFLINE',
      ),
      2456 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401012 - POS Online',
        'Revenue Name' => 'Temporary Signages - POS ONLINE',
      ),
      2457 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401013',
        'Revenue Name' => '2nd Party Signage Rates',
      ),
      2458 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401013 - POS Offline',
        'Revenue Name' => '2nd Party Signage Rates - POS OFFLINE',
      ),
      2459 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401013 - POS Online',
        'Revenue Name' => '2nd Party Signage Rates - POS ONLINE',
      ),
      2460 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401014',
        'Revenue Name' => '3rd Party Registrations',
      ),
      2461 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401014 - POS Offline',
        'Revenue Name' => '3rd Party Registrations - POS OFFLINE',
      ),
      2462 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401014 - POS Online',
        'Revenue Name' => '3rd Party Registrations - POS ONLINE',
      ),
      2463 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401015',
        'Revenue Name' => '3rd Party Outdoor campaign collateral for political candidates',
      ),
      2464 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401015 - POS Offline',
        'Revenue Name' => '3rd Party Outdoor campaign collateral for political candidates - POS OFFLINE',
      ),
      2465 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401015 - POS Online',
        'Revenue Name' => '3rd Party Outdoor campaign collateral for political cand - POS ONLINE',
      ),
      2466 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401016',
        'Revenue Name' => '3rd Party Billboard advertisements',
      ),
      2467 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401016 - POS Offline',
        'Revenue Name' => '3rd Party Billboard advertisements - POS OFFLINE',
      ),
      2468 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401016 - POS Online',
        'Revenue Name' => '3rd Party Billboard advertisements - POS ONLINE',
      ),
      2469 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401017',
        'Revenue Name' => 'Mobile Adverts',
      ),
      2470 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401017 - POS Offline',
        'Revenue Name' => 'Mobile Adverts - POS OFFLINE',
      ),
      2471 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401017 - POS Online',
        'Revenue Name' => 'Mobile Adverts - POS ONLINE',
      ),
      2472 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401018',
        'Revenue Name' => 'House Branding',
      ),
      2473 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401018 - POS Offline',
        'Revenue Name' => 'House Branding - POS OFFLINE',
      ),
      2474 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401018 - POS Online',
        'Revenue Name' => 'House Branding - POS ONLINE',
      ),
      2475 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401019',
        'Revenue Name' => 'Furniture Advertising',
      ),
      2476 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401019 - POS Offline',
        'Revenue Name' => 'Furniture Advertising - POS OFFLINE',
      ),
      2477 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401019 - POS Online',
        'Revenue Name' => 'Furniture Advertising - POS ONLINE',
      ),
      2478 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401020',
        'Revenue Name' => 'Sales/Roadshow Promos',
      ),
      2479 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401020 - POS Offline',
        'Revenue Name' => 'Sales/Roadshow Promos - POS OFFLINE',
      ),
      2480 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401020 - POS Online',
        'Revenue Name' => 'Sales/Roadshow Promos - POS ONLINE',
      ),
      2481 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401021',
        'Revenue Name' => 'Mobile Branding',
      ),
      2482 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401021 - POS Offline',
        'Revenue Name' => 'Mobile Branding - POS OFFLINE',
      ),
      2483 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401021 - POS Online',
        'Revenue Name' => 'Mobile Branding - POS ONLINE',
      ),
      2484 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401022',
        'Revenue Name' => 'Ancillary Services',
      ),
      2485 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401022 - POS Offline',
        'Revenue Name' => 'Ancillary Services - POS OFFLINE',
      ),
      2486 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401022 - POS Online',
        'Revenue Name' => 'Ancillary Services - POS ONLINE',
      ),
      2487 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401023',
        'Revenue Name' => 'Site Provisioning',
      ),
      2488 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401023 - POS Offline',
        'Revenue Name' => 'Site Provisioning - POS OFFLINE',
      ),
      2489 => 
      array (
        'Category Code' => '51001001',
        'Category Name' => 'IMO SIGNAGE AND ADVERTISEMENT AGENCY',
        'Revenue Code' => '51001001-15401023 - POS Online',
        'Revenue Name' => 'Site Provisioning - POS ONLINE',
      ),
      2490 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501001',
        'Revenue Name' => 'STALLAGE FEE',
      ),
      2491 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501001 - POS Offline',
        'Revenue Name' => 'STALLAGE FEE - POS OFFLINE',
      ),
      2492 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501001 - POS Online',
        'Revenue Name' => 'STALLAGE FEE - POS ONLINE',
      ),
      2493 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501002',
        'Revenue Name' => 'LOADNING AND OFF- LOADING FEE',
      ),
      2494 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501002 - POS Offline',
        'Revenue Name' => 'LOADNING AND OFF -  LOADING FEE - POS OFFLINE',
      ),
      2495 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501002 - POS Online',
        'Revenue Name' => 'LOADNING AND OFF -  LOADING FEE - POS ONLINE',
      ),
      2496 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501003',
        'Revenue Name' => 'SANITATION FEE',
      ),
      2497 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501003 - POS Offline',
        'Revenue Name' => 'SANITATION FEE - POS OFFLINE',
      ),
      2498 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501003 - POS Online',
        'Revenue Name' => 'SANITATION FEE - POS ONLINE',
      ),
      2499 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501004',
        'Revenue Name' => 'CAPITATION FEE',
      ),
      2500 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501004 - POS Offline',
        'Revenue Name' => 'CAPITATION FEE - POS OFFLINE',
      ),
      2501 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501004 - POS Online',
        'Revenue Name' => 'CAPITATION FEE - POS ONLINE',
      ),
      2502 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501005',
        'Revenue Name' => 'DAILY TOOLS FEE',
      ),
      2503 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501005 - POS Offline',
        'Revenue Name' => 'DAILY TOOLS FEE - POS OFFLINE',
      ),
      2504 => 
      array (
        'Category Code' => '52001001',
        'Category Name' => 'IMO STATE DEVELOPMENT AUTHORITY',
        'Revenue Code' => '52001001-15501005 - POS Online',
        'Revenue Name' => 'DAILY TOOLS FEE - POS ONLINE',
      ),
      2505 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301001',
        'Revenue Name' => 'PRE-ELECTION SEMINAR/WORKSHOP FOR COUNCILLORSHIP CANDIDA',
      ),
      2506 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301001 - POS Offline',
        'Revenue Name' => 'PRE - ELECTION SEMINAR/WORKSHOP FOR COUNCILLORSHIP CANDIDA - POS OFFLINE',
      ),
      2507 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301001 - POS Online',
        'Revenue Name' => 'IMO STATE IND ELECT COM-PRE - ELECTION SEMINAR/WORKSHOP FOR COUNC CANDIDA - POS ONLINE',
      ),
      2508 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301002',
        'Revenue Name' => '10% WHT CONSULTANTS',
      ),
      2509 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301002 - POS Offline',
        'Revenue Name' => '10% WHT CONSULTANTS - POS OFFLINE',
      ),
      2510 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301002 - POS Online',
        'Revenue Name' => '10% WHT CONSULTANTS - POS ONLINE',
      ),
      2511 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301003',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      2512 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301003 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      2513 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301003 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      2514 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301004',
        'Revenue Name' => 'CANDIDATE NOMINATION FEES',
      ),
      2515 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301004 - POS Offline',
        'Revenue Name' => 'CANDIDATE NOMINATION FEES - POS OFFLINE',
      ),
      2516 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301004 - POS Online',
        'Revenue Name' => 'CANDIDATE NOMINATION FEES - POS ONLINE',
      ),
      2517 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301005',
        'Revenue Name' => 'CERTIFICATION OF DOCUMENTS',
      ),
      2518 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301005 - POS Offline',
        'Revenue Name' => 'CERTIFICATION OF DOCUMENTS - POS OFFLINE',
      ),
      2519 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301005 - POS Online',
        'Revenue Name' => 'CERTIFICATION OF DOCUMENTS - POS ONLINE',
      ),
      2520 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301006',
        'Revenue Name' => 'CERTIFICATION OF ISIEC DOCUMENTS AND OTHERS',
      ),
      2521 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301006 - POS Offline',
        'Revenue Name' => 'CERTIFICATION OF ISIEC DOCUMENTS AND OTHERS - POS OFFLINE',
      ),
      2522 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301006 - POS Online',
        'Revenue Name' => 'CERTIFICATION OF ISIEC DOCUMENTS AND OTHERS - POS ONLINE',
      ),
      2523 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301007',
        'Revenue Name' => 'MINOR JOB ACCEPTANCE FEES',
      ),
      2524 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301007 - POS Offline',
        'Revenue Name' => 'MINOR JOB ACCEPTANCE FEES - POS OFFLINE',
      ),
      2525 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301007 - POS Online',
        'Revenue Name' => 'MINOR JOB ACCEPTANCE FEES - POS ONLINE',
      ),
      2526 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301008',
        'Revenue Name' => 'POST-ELECTION SEMINAR/WORKSHOP FOR ELECTED',
      ),
      2527 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301008 - POS Offline',
        'Revenue Name' => 'POST - ELECTION SEMINAR/WORKSHOP FOR ELECTED - POS OFFLINE',
      ),
      2528 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301008 - POS Online',
        'Revenue Name' => 'POST - ELECTION SEMINAR/WORKSHOP FOR ELECTED - POS',
      ),
      2529 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301009',
        'Revenue Name' => 'POST-ELECTION SEMINAR/WORKSHOP FOR LGA',
      ),
      2530 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301009 - POS Offline',
        'Revenue Name' => 'POST - ELECTION SEMINAR/WORKSHOP FOR LGA - POS OFFLINE',
      ),
      2531 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301009 - POS Online',
        'Revenue Name' => 'POST - ELECTION SEMINAR/WORKSHOP FOR LGA - POS ONLINE',
      ),
      2532 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301010',
        'Revenue Name' => 'PRE-ELECTION SEMINAR/WORKSHOP FOR CHAIRMANSHIP CANDIDAT',
      ),
      2533 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301010 - POS Offline',
        'Revenue Name' => 'PRE - ELECTION SEMINAR/WORKSHOP FOR CHAIRMANSHIP CANDIDAT - POS OFFLINE',
      ),
      2534 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301010 - POS Online',
        'Revenue Name' => 'IMO STATE IND ELECT COM-PRE - ELECTION SEMINAR/WORKSHOP FOR CHAIRM CANDIDAT - POS ONLINE',
      ),
      2535 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301011',
        'Revenue Name' => 'PRE-ELECTION SEMINAR/WORKSHOP FOR LGA/WARD PARTY OFFICE',
      ),
      2536 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301011 - POS Offline',
        'Revenue Name' => 'PRE - ELECTION SEMINAR/WORKSHOP FOR LGA/WARD PARTY OFFICE - POS OFFLINE',
      ),
      2537 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301011 - POS Online',
        'Revenue Name' => 'IMO STATE IND ELECT COM-PRE - ELECTION SEMINAR/WORKSHOP FOR LGA/WARD PARTY OFFICE - POS ONLINE',
      ),
      2538 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301012',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS',
      ),
      2539 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301012 - POS Offline',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS OFFLINE',
      ),
      2540 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301012 - POS Online',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS ONLINE',
      ),
      2541 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301013',
        'Revenue Name' => 'TENDER FEES',
      ),
      2542 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301013 - POS Offline',
        'Revenue Name' => 'TENDER FEES - POS OFFLINE',
      ),
      2543 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301013 - POS Online',
        'Revenue Name' => 'TENDER FEES - POS ONLINE',
      ),
      2544 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301014',
        'Revenue Name' => 'WARD CREATION FEES',
      ),
      2545 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301014 - POS Offline',
        'Revenue Name' => 'WARD CREATION FEES - POS OFFLINE',
      ),
      2546 => 
      array (
        'Category Code' => '29001001',
        'Category Name' => 'IMO STATE INDEPENDENT ELECTORAL COMMISSION',
        'Revenue Code' => '29001001-13301014 - POS Online',
        'Revenue Name' => 'WARD CREATION FEES - POS ONLINE',
      ),
      2547 => 
      array (
        'Category Code' => '35001001',
        'Category Name' => 'IMO STATE INFRASTRUCTURAL DEVELOPMENT',
        'Revenue Code' => '35001001-13901001',
        'Revenue Name' => 'INFRASTRUCTURAL DEVELOPMENT LEVY',
      ),
      2548 => 
      array (
        'Category Code' => '35001001',
        'Category Name' => 'IMO STATE INFRASTRUCTURAL DEVELOPMENT',
        'Revenue Code' => '35001001-13901001 - POS Offline',
        'Revenue Name' => 'POS OFFLINE',
      ),
      2549 => 
      array (
        'Category Code' => '35001001',
        'Category Name' => 'IMO STATE INFRASTRUCTURAL DEVELOPMENT',
        'Revenue Code' => '35001001-13901001 - POS Online',
        'Revenue Name' => 'IMO STATE INFRASTRUCTURAL DEVELOPMENT-POS ONLINE',
      ),
      2550 => 
      array (
        'Category Code' => '11011001',
        'Category Name' => 'IMO STATE LIAISON OFFICE ABUJA',
        'Revenue Code' => '11011001-12021001',
        'Revenue Name' => 'CERTIFICATE OF STATE OF ORIGIN',
      ),
      2551 => 
      array (
        'Category Code' => '11011001',
        'Category Name' => 'IMO STATE LIAISON OFFICE ABUJA',
        'Revenue Code' => '11011001-12021001 - POS Offline',
        'Revenue Name' => 'POS OFFLINE',
      ),
      2552 => 
      array (
        'Category Code' => '11011001',
        'Category Name' => 'IMO STATE LIAISON OFFICE ABUJA',
        'Revenue Code' => '11011001-12021001 - POS Online',
        'Revenue Name' => 'POS ONLINE',
      ),
      2553 => 
      array (
        'Category Code' => '11011001',
        'Category Name' => 'IMO STATE LIAISON OFFICE ABUJA',
        'Revenue Code' => '11011001-12021002',
        'Revenue Name' => '10% WHT ON CONSULTANTS',
      ),
      2554 => 
      array (
        'Category Code' => '11011001',
        'Category Name' => 'IMO STATE LIAISON OFFICE ABUJA',
        'Revenue Code' => '11011001-12021002 - POS Offline',
        'Revenue Name' => '10% WHT ON CONSULTANTS - POS OFFLINE',
      ),
      2555 => 
      array (
        'Category Code' => '11011001',
        'Category Name' => 'IMO STATE LIAISON OFFICE ABUJA',
        'Revenue Code' => '11011001-12021002 - POS Online',
        'Revenue Name' => '10% WHT ON CONSULTANTS - POS ONLINE',
      ),
      2556 => 
      array (
        'Category Code' => '11011001',
        'Category Name' => 'IMO STATE LIAISON OFFICE ABUJA',
        'Revenue Code' => '11011001-12021003',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      2557 => 
      array (
        'Category Code' => '11011001',
        'Category Name' => 'IMO STATE LIAISON OFFICE ABUJA',
        'Revenue Code' => '11011001-12021003 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      2558 => 
      array (
        'Category Code' => '11011001',
        'Category Name' => 'IMO STATE LIAISON OFFICE ABUJA',
        'Revenue Code' => '11011001-12021003 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      2559 => 
      array (
        'Category Code' => '11012001',
        'Category Name' => 'IMO STATE LIAISON OFFICE LAGOS',
        'Revenue Code' => '11012001-12021002',
        'Revenue Name' => 'CERTIFICATE OF STATE OF ORIGIN',
      ),
      2560 => 
      array (
        'Category Code' => '11012001',
        'Category Name' => 'IMO STATE LIAISON OFFICE LAGOS',
        'Revenue Code' => '11012001-12021002 - POS Offline',
        'Revenue Name' => 'POS OFFLINE',
      ),
      2561 => 
      array (
        'Category Code' => '11012001',
        'Category Name' => 'IMO STATE LIAISON OFFICE LAGOS',
        'Revenue Code' => '11012001-12021002 - POS Online',
        'Revenue Name' => 'POS ONLINE',
      ),
      2562 => 
      array (
        'Category Code' => '11012001',
        'Category Name' => 'IMO STATE LIAISON OFFICE LAGOS',
        'Revenue Code' => '11012001-12021003',
        'Revenue Name' => '10% WHT ON CONSULTANTS',
      ),
      2563 => 
      array (
        'Category Code' => '11012001',
        'Category Name' => 'IMO STATE LIAISON OFFICE LAGOS',
        'Revenue Code' => '11012001-12021003 - POS Offline',
        'Revenue Name' => '10% WHT ON CONSULTANTS - POS OFFLINE',
      ),
      2564 => 
      array (
        'Category Code' => '11012001',
        'Category Name' => 'IMO STATE LIAISON OFFICE LAGOS',
        'Revenue Code' => '11012001-12021003 - POS Online',
        'Revenue Name' => '10% WHT ON CONSULTANTS - POS ONLINE',
      ),
      2565 => 
      array (
        'Category Code' => '11012001',
        'Category Name' => 'IMO STATE LIAISON OFFICE LAGOS',
        'Revenue Code' => '11012001-12021004',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      2566 => 
      array (
        'Category Code' => '11012001',
        'Category Name' => 'IMO STATE LIAISON OFFICE LAGOS',
        'Revenue Code' => '11012001-12021004 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      2567 => 
      array (
        'Category Code' => '11012001',
        'Category Name' => 'IMO STATE LIAISON OFFICE LAGOS',
        'Revenue Code' => '11012001-12021004 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      2568 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201001',
        'Revenue Name' => 'REGULAR STUDENT OTHERS ND1',
      ),
      2569 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201001 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT OTHERS ND1 - POS OFFLINE',
      ),
      2570 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201001 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT OTHERS ND1 - POS ONLINE',
      ),
      2571 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201002',
        'Revenue Name' => 'REGULAR STUDENT OTHERS ND2',
      ),
      2572 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201002 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT OTHERS ND2 - POS OFFLINE',
      ),
      2573 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201002 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT OTHERS ND2 - POS ONLINE',
      ),
      2574 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201003',
        'Revenue Name' => 'REGULAR STUDENT OTHERS HND1',
      ),
      2575 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201003 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT OTHERS HND1 - POS OFFLINE',
      ),
      2576 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201003 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT OTHERS HND1 - POS ONLINE',
      ),
      2577 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201004',
        'Revenue Name' => 'REGULAR STUDENT OTHERS HND2',
      ),
      2578 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201004 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT OTHERS HND2 - POS OFFLINE',
      ),
      2579 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201004 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT OTHERS HND2 - POS ONLINE',
      ),
      2580 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201005',
        'Revenue Name' => 'REGULAR STUDENT ICT ND1',
      ),
      2581 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201005 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT ICT ND1 - POS OFFLINE',
      ),
      2582 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201005 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT ICT ND1 - POS ONLINE',
      ),
      2583 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201006',
        'Revenue Name' => 'REGULAR STUDENT ICT ND2',
      ),
      2584 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201006 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT ICT ND2 - POS OFFLINE',
      ),
      2585 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201006 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT ICT ND2 - POS ONLINE',
      ),
      2586 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201007',
        'Revenue Name' => 'REGULAR STUDENT ICT HND1',
      ),
      2587 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201007 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT ICT HND1 - POS OFFLINE',
      ),
      2588 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201007 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT ICT HND1 - POS ONLINE',
      ),
      2589 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201008',
        'Revenue Name' => 'REGULAR STUDENT ICT HND2',
      ),
      2590 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201008 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT ICT HND2 - POS OFFLINE',
      ),
      2591 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201008 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT ICT HND2 - POS ONLINE',
      ),
      2592 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201009',
        'Revenue Name' => 'REGULAR STUDENT PRE-ADMISSION MEDICAL FITNESS TEST ND1',
      ),
      2593 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201009 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT PRE - ADMISSION MEDICAL FITNESS TEST ND1 - POS OFFLINE',
      ),
      2594 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201009 - POS Online',
        'Revenue Name' => 'IMO STATE POLY-REGULAR STUDENT PRE - ADMISSION MEDICAL FITNESS TEST ND1 - POS ONLINE',
      ),
      2595 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201010',
        'Revenue Name' => 'REGULAR STUDENT PRE-ADMISSION MEDICAL FITNESS TEST HND1',
      ),
      2596 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201010 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT PRE - ADMISSION MEDICAL FITNESS TEST HND1 - POS OFFLINE',
      ),
      2597 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201010 - POS Online',
        'Revenue Name' => 'IMO STATE POLY-REGULAR STUDENT PRE - ADMISSION MEDICAL FITNESS TEST HND1 - POS ONLINE',
      ),
      2598 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201011',
        'Revenue Name' => 'REGULAR STUDENT ACCEPTANCE FEE ND1',
      ),
      2599 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201011 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT ACCEPTANCE FEE ND1 - POS OFFLINE',
      ),
      2600 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201011 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT ACCEPTANCE FEE ND1 - POS ONLINE',
      ),
      2601 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201012',
        'Revenue Name' => 'REGULAR STUDENT ACCEPTANCE FEE HND1',
      ),
      2602 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201012 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT ACCEPTANCE FEE HND1 - POS OFFLINE',
      ),
      2603 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201012 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT ACCEPTANCE FEE HND1 - POS ONLINE',
      ),
      2604 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201013',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE - INDIGENES ND1',
      ),
      2605 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201013 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  INDIGENES ND1 - POS OFFLINE',
      ),
      2606 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201013 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  INDIGENES ND1 - POS ONLINE',
      ),
      2607 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201014',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE - INDIGENES ND2',
      ),
      2608 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201014 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  INDIGENES ND2 - POS OFFLINE',
      ),
      2609 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201014 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  INDIGENES ND2 - POS ONLINE',
      ),
      2610 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201015',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE - INDIGENES HND1',
      ),
      2611 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201015 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  INDIGENES HND1 - POS OFFLINE',
      ),
      2612 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201015 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  INDIGENES HND1 - POS ONLINE',
      ),
      2613 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201016',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE - INDIGENES HND2',
      ),
      2614 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201016 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  INDIGENES HND2 - POS OFFLINE',
      ),
      2615 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201016 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  INDIGENES HND2 - POS ONLINE',
      ),
      2616 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201017',
        'Revenue Name' => 'IMO STATE POLYTECHNIC -REGULAR STUDENT TUITION FEE - NON INDEGENS ND1',
      ),
      2617 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201017 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  NON INDEGENS ND1 - POS OFFLINE',
      ),
      2618 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201017 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  NON INDEGENS ND1 - POS ONLINE',
      ),
      2619 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201018',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE - NON INDEGENS ND2',
      ),
      2620 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201018 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  NON INDEGENS ND2 - POS OFFLINE',
      ),
      2621 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201018 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  NON INDEGENS ND2 - POS ONLINE',
      ),
      2622 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201019',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE -NONINDIGENES HND1',
      ),
      2623 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201019 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  - NONINDIGENES HND1 - POS OFFLINE',
      ),
      2624 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201019 - POS Online',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  - NONINDIGENES HND1 - POS ONLINE',
      ),
      2625 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201020',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE - NON INDIGENES HND2',
      ),
      2626 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201020 - POS Offline',
        'Revenue Name' => 'REGULAR STUDENT TUITION FEE  -  NON INDIGENES HND2 - POS OFFLINE',
      ),
      2627 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201020 - POS Online',
        'Revenue Name' => 'IMO STATE POLY (IMO POLY)-REGULAR STUDENT TUITION FEE  -  NON INDIGENES HND2 - POS ONLINE',
      ),
      2628 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201021',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS ND1',
      ),
      2629 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201021 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS ND1 - POS OFFLINE',
      ),
      2630 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201021 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS ND1 - POS ONLINE',
      ),
      2631 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201022',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS ND2',
      ),
      2632 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201022 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS ND2 - POS OFFLINE',
      ),
      2633 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201022 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS ND2 - POS ONLINE',
      ),
      2634 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201023',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS HND1',
      ),
      2635 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201023 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS HND1 - POS OFFLINE',
      ),
      2636 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201023 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS HND1 - POS ONLINE',
      ),
      2637 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201024',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS HND2',
      ),
      2638 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201024 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS HND2 - POS OFFLINE',
      ),
      2639 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201024 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME OTHERS HND2 - POS ONLINE',
      ),
      2640 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201025',
        'Revenue Name' => 'EVENING PROGRAMME ICT ND1',
      ),
      2641 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201025 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME ICT ND1 - POS OFFLINE',
      ),
      2642 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201025 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME ICT ND1 - POS ONLINE',
      ),
      2643 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201026',
        'Revenue Name' => 'EVENING PROGRAMME ICT ND2',
      ),
      2644 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201026 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME ICT ND2 - POS OFFLINE',
      ),
      2645 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201026 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME ICT ND2 - POS ONLINE',
      ),
      2646 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201027',
        'Revenue Name' => 'EVENING PROGRAMME ICT HND1',
      ),
      2647 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201027 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME ICT HND1 - POS OFFLINE',
      ),
      2648 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201027 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME ICT HND1 - POS ONLINE',
      ),
      2649 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201028',
        'Revenue Name' => 'EVENING PROGRAMME ICT HND2',
      ),
      2650 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201028 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME ICT HND2 - POS OFFLINE',
      ),
      2651 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201028 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME ICT HND2 - POS ONLINE',
      ),
      2652 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201029',
        'Revenue Name' => 'EVENING PROGRAMME PRE-ADMISSION MEDICAL FITNESS TEST ND1',
      ),
      2653 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201029 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME PRE - ADMISSION MEDICAL FITNESS TEST ND1 - POS OFFLINE',
      ),
      2654 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201029 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME PRE - ADMISSION MEDICAL FITNESS TEST ND1 - POS ONLINE',
      ),
      2655 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201030',
        'Revenue Name' => 'EVENING PROGRAMME PRE-ADMISSION MEDICAL FITNESS TEST HND1',
      ),
      2656 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201030 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME PRE - ADMISSION MEDICAL FITNESS TEST HND1 - POS OFFLINE',
      ),
      2657 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201030 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME PRE - ADMISSION MEDICAL FITNESS TEST HND1 - POS ONLINE',
      ),
      2658 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201031',
        'Revenue Name' => 'EVENING PROGRAMME ACCEPTANCE FEE ND1',
      ),
      2659 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201031 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME ACCEPTANCE FEE ND1 - POS OFFLINE',
      ),
      2660 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201031 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME ACCEPTANCE FEE ND1 - POS ONLINE',
      ),
      2661 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201032',
        'Revenue Name' => 'EVENING PROGRAMME ACCEPTANCE FEE HND1',
      ),
      2662 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201032 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME ACCEPTANCE FEE HND1 - POS OFFLINE',
      ),
      2663 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201032 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME ACCEPTANCE FEE HND1 - POS ONLINE',
      ),
      2664 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201033',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE - ND1',
      ),
      2665 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201033 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE  -  ND1 - POS OFFLINE',
      ),
      2666 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201033 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE  -  ND1 - POS ONLINE',
      ),
      2667 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201034',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE - ND2',
      ),
      2668 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201034 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE  -  ND2 - POS OFFLINE',
      ),
      2669 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201034 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE  -  ND2 - POS ONLINE',
      ),
      2670 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201035',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE - HND1',
      ),
      2671 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201035 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE  -  HND1 - POS OFFLINE',
      ),
      2672 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201035 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE  -  HND1 - POS ONLINE',
      ),
      2673 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201036',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE - HND2',
      ),
      2674 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201036 - POS Offline',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE  -  HND2 - POS OFFLINE',
      ),
      2675 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201036 - POS Online',
        'Revenue Name' => 'EVENING PROGRAMME TUITION FEE  -  HND2 - POS ONLINE',
      ),
      2676 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201037',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS ND1',
      ),
      2677 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201037 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS ND1 - POS OFFLINE',
      ),
      2678 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201037 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS ND1 - POS ONLINE',
      ),
      2679 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201038',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS ND2',
      ),
      2680 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201038 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS ND2 - POS OFFLINE',
      ),
      2681 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201038 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS ND2 - POS ONLINE',
      ),
      2682 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201039',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS HND1',
      ),
      2683 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201039 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS HND1 - POS OFFLINE',
      ),
      2684 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201039 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS HND1 - POS ONLINE',
      ),
      2685 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201040',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS HND2',
      ),
      2686 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201040 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS HND2 - POS OFFLINE',
      ),
      2687 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201040 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME OTHERS HND2 - POS ONLINE',
      ),
      2688 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201041',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT ND1',
      ),
      2689 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201041 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT ND1 - POS OFFLINE',
      ),
      2690 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201041 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT ND1 - POS ONLINE',
      ),
      2691 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201042',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT ND2',
      ),
      2692 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201042 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT ND2 - POS OFFLINE',
      ),
      2693 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201042 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT ND2 - POS ONLINE',
      ),
      2694 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201043',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT HND1',
      ),
      2695 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201043 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT HND1 - POS OFFLINE',
      ),
      2696 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201043 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT HND1 - POS ONLINE',
      ),
      2697 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201044',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT HND2',
      ),
      2698 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201044 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT HND2 - POS OFFLINE',
      ),
      2699 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201044 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME ICT HND2 - POS ONLINE',
      ),
      2700 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201045',
        'Revenue Name' => 'WEEKEND PROGRAMME PRE-ADMISSION MEDICAL FITNESS TEST ND1',
      ),
      2701 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201045 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME PRE - ADMISSION MEDICAL FITNESS TEST ND1 - POS OFFLINE',
      ),
      2702 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201045 - POS Online',
        'Revenue Name' => 'IMO STATE POLY-WEEKEND PROGRAMME PRE - ADMISSION MEDICAL FITNESS TEST ND1 - POS ONLINE',
      ),
      2703 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201046',
        'Revenue Name' => 'WEEKEND PROGRAMME PRE-ADMISSION MEDICAL FITNESS TEST HND1',
      ),
      2704 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201046 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME PRE - ADMISSION MEDICAL FITNESS TEST HND1 - POS OFFLINE',
      ),
      2705 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201046 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME PRE - ADMISSION MEDICAL FITNESS TEST HND1 - POS ONLINE',
      ),
      2706 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201047',
        'Revenue Name' => 'WEEKEND PROGRAMME ACCEPTANCE FEE ND1',
      ),
      2707 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201047 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME ACCEPTANCE FEE ND1 - POS OFFLINE',
      ),
      2708 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201047 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME ACCEPTANCE FEE ND1 - POS ONLINE',
      ),
      2709 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201048',
        'Revenue Name' => 'WEEKEND PROGRAMME ACCEPTANCE FEE HND1',
      ),
      2710 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201048 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME ACCEPTANCE FEE HND1 - POS OFFLINE',
      ),
      2711 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201048 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME ACCEPTANCE FEE HND1 - POS ONLINE',
      ),
      2712 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201049',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE - ND1',
      ),
      2713 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201049 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE  -  ND1 - POS OFFLINE',
      ),
      2714 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201049 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE  -  ND1 - POS ONLINE',
      ),
      2715 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201050',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE - ND2',
      ),
      2716 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201050 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE  -  ND2 - POS OFFLINE',
      ),
      2717 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201050 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE  -  ND2 - POS ONLINE',
      ),
      2718 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201051',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE - HND1',
      ),
      2719 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201051 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE  -  HND1 - POS OFFLINE',
      ),
      2720 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201051 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE  -  HND1 - POS ONLINE',
      ),
      2721 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201052',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE - HND2',
      ),
      2722 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201052 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE  -  HND2 - POS OFFLINE',
      ),
      2723 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201052 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME TUITION FEE  -  HND2 - POS ONLINE',
      ),
      2724 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201053',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE - ND1',
      ),
      2725 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201053 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE  -  ND1 - POS OFFLINE',
      ),
      2726 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201053 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE  -  ND1 - POS ONLINE',
      ),
      2727 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201054',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE - ND2',
      ),
      2728 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201054 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE  -  ND2 - POS OFFLINE',
      ),
      2729 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201054 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE  -  ND2 - POS ONLINE',
      ),
      2730 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201055',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE - HND1',
      ),
      2731 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201055 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE  -  HND1 - POS OFFLINE',
      ),
      2732 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201055 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE  -  HND1 - POS ONLINE',
      ),
      2733 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201056',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE - HND2',
      ),
      2734 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201056 - POS Offline',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE  -  HND2 - POS OFFLINE',
      ),
      2735 => 
      array (
        'Category Code' => '39001001',
        'Category Name' => 'IMO STATE POLYTECHNIC (IMO POLY)',
        'Revenue Code' => '39001001-14201056 - POS Online',
        'Revenue Name' => 'WEEKEND PROGRAMME ENDOWMENT FEE  -  HND2 - POS ONLINE',
      ),
      2736 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101001',
        'Revenue Name' => 'CIVIL SERVICE WEEK PROCEEDS',
      ),
      2737 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101001 - POS Offline',
        'Revenue Name' => 'CIVIL SERVICE WEEK PROCEEDS - POS OFFLINE',
      ),
      2738 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101001 - POS Online',
        'Revenue Name' => 'CIVIL SERVICE WEEK PROCEEDS - POS ONLINE',
      ),
      2739 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101002',
        'Revenue Name' => 'IWUANYANWU FOOTBALL CLUB PROCEEDS FEES',
      ),
      2740 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101002 - POS Offline',
        'Revenue Name' => 'IWUANYANWU FOOTBALL CLUB PROCEEDS FEES - POS OFFLINE',
      ),
      2741 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101002 - POS Online',
        'Revenue Name' => 'IWUANYANWU FOOTBALL CLUB PROCEEDS FEES - POS ONLINE',
      ),
      2742 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101003',
        'Revenue Name' => 'REGISTRATION OF SPORTS CLUBS',
      ),
      2743 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101003 - POS Offline',
        'Revenue Name' => 'REGISTRATION OF SPORTS CLUBS - POS OFFLINE',
      ),
      2744 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101003 - POS Online',
        'Revenue Name' => 'REGISTRATION OF SPORTS CLUBS - POS ONLINE',
      ),
      2745 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101004',
        'Revenue Name' => 'REG. OF SPORTS CLUBS',
      ),
      2746 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101004 - POS Offline',
        'Revenue Name' => 'REG. OF SPORTS CLUBS - POS OFFLINE',
      ),
      2747 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101004 - POS Online',
        'Revenue Name' => 'REG. OF SPORTS CLUBS - POS ONLINE',
      ),
      2748 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101005',
        'Revenue Name' => 'SALE OF SPORTS CLUB FORM',
      ),
      2749 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101005 - POS Offline',
        'Revenue Name' => 'SALE OF SPORTS CLUB FORM - POS OFFLINE',
      ),
      2750 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101005 - POS Online',
        'Revenue Name' => 'SALE OF SPORTS CLUB FORM - POS ONLINE',
      ),
      2751 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101006',
        'Revenue Name' => 'RENEWAL OF SPORTS CLUB',
      ),
      2752 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101006 - POS Offline',
        'Revenue Name' => 'RENEWAL OF SPORTS CLUB - POS OFFLINE',
      ),
      2753 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101006 - POS Online',
        'Revenue Name' => 'RENEWAL OF SPORTS CLUB - POS ONLINE',
      ),
      2754 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101009',
        'Revenue Name' => 'SHOP RENT',
      ),
      2755 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101009 - POS Offline',
        'Revenue Name' => 'SHOP RENT - POS OFFLINE',
      ),
      2756 => 
      array (
        'Category Code' => '37001001',
        'Category Name' => 'IMO STATE SPORTS COMMISSION',
        'Revenue Code' => '37001001-14101009 - POS Online',
        'Revenue Name' => 'SHOP RENT - POS ONLINE',
      ),
      2757 => 
      array (
        'Category Code' => '34001001',
        'Category Name' => 'IMO STATE TOURISM BOARD',
        'Revenue Code' => '34001001-13801001',
        'Revenue Name' => 'REG./RENEWAL FOR OPERATIONAL LICENSE.',
      ),
      2758 => 
      array (
        'Category Code' => '34001001',
        'Category Name' => 'IMO STATE TOURISM BOARD',
        'Revenue Code' => '34001001-13801001 - POS Offline',
        'Revenue Name' => 'REG./RENEWAL FOR OPERATIONAL LICENSE. - POS OFFLINE',
      ),
      2759 => 
      array (
        'Category Code' => '34001001',
        'Category Name' => 'IMO STATE TOURISM BOARD',
        'Revenue Code' => '34001001-13801001 - POS Online',
        'Revenue Name' => 'REG./RENEWAL FOR OPERATIONAL LICENSE. - POS ONLINE',
      ),
      2760 => 
      array (
        'Category Code' => '34001001',
        'Category Name' => 'IMO STATE TOURISM BOARD',
        'Revenue Code' => '34001001-13801002',
        'Revenue Name' => 'REGISTRATION OF HOTELS AND ALLIED TOURISM ENTERPRISES',
      ),
      2761 => 
      array (
        'Category Code' => '34001001',
        'Category Name' => 'IMO STATE TOURISM BOARD',
        'Revenue Code' => '34001001-13801002 - POS Offline',
        'Revenue Name' => 'REGISTRATION OF HOTELS AND ALLIED TOURISM ENTERPRISES - POS OFFLINE',
      ),
      2762 => 
      array (
        'Category Code' => '34001001',
        'Category Name' => 'IMO STATE TOURISM BOARD',
        'Revenue Code' => '34001001-13801002 - POS Online',
        'Revenue Name' => 'REGISTRATION OF HOTELS AND ALLIED TOURISM ENTERPRISES - POS ONLINE',
      ),
      2763 => 
      array (
        'Category Code' => '34001001',
        'Category Name' => 'IMO STATE TOURISM BOARD',
        'Revenue Code' => '34001001-13801003',
        'Revenue Name' => 'RENEWAL OF HOTELS AND ALLIED TOURISM ENTERPRISES',
      ),
      2764 => 
      array (
        'Category Code' => '34001001',
        'Category Name' => 'IMO STATE TOURISM BOARD',
        'Revenue Code' => '34001001-13801003 - POS Offline',
        'Revenue Name' => 'RENEWAL OF HOTELS AND ALLIED TOURISM ENTERPRISES - POS OFFLINE',
      ),
      2765 => 
      array (
        'Category Code' => '34001001',
        'Category Name' => 'IMO STATE TOURISM BOARD',
        'Revenue Code' => '34001001-13801003 - POS Online',
        'Revenue Name' => 'RENEWAL OF HOTELS AND ALLIED TOURISM ENTERPRISES - POS ONLINE',
      ),
      2766 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301001',
        'Revenue Name' => 'ACCEPTANCE FEE',
      ),
      2767 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301001 - POS Offline',
        'Revenue Name' => 'ACCEPTANCE FEE - POS OFFLINE',
      ),
      2768 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301001 - POS Online',
        'Revenue Name' => 'ACCEPTANCE FEE - POS ONLINE',
      ),
      2769 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301002',
        'Revenue Name' => 'ANCILLARY FEEINDIGENES',
      ),
      2770 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301002 - POS Offline',
        'Revenue Name' => 'ANCILLARY FEEINDIGENES - POS OFFLINE',
      ),
      2771 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301002 - POS Online',
        'Revenue Name' => 'ANCILLARY FEEINDIGENES - POS ONLINE',
      ),
      2772 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301003',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES MEDICINE',
      ),
      2773 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301003 - POS Offline',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES MEDICINE - POS OFFLINE',
      ),
      2774 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301003 - POS Online',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES MEDICINE - POS ONLINE',
      ),
      2775 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301004',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES HEALTH',
      ),
      2776 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301004 - POS Offline',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES HEALTH - POS OFFLINE',
      ),
      2777 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301004 - POS Online',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES HEALTH - POS ONLINE',
      ),
      2778 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301005',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES OTHERS',
      ),
      2779 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301005 - POS Offline',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES OTHERS - POS OFFLINE',
      ),
      2780 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301005 - POS Online',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES OTHERS - POS ONLINE',
      ),
      2781 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301006',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES LAW',
      ),
      2782 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301006 - POS Offline',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES LAW - POS OFFLINE',
      ),
      2783 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301006 - POS Online',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES LAW - POS ONLINE',
      ),
      2784 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301007',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES ENGR',
      ),
      2785 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301007 - POS Offline',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES ENGR - POS OFFLINE',
      ),
      2786 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301007 - POS Online',
        'Revenue Name' => 'SCHOOL FEES NON INDIGENES ENGR - POS ONLINE',
      ),
      2787 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301008',
        'Revenue Name' => 'ACCEPTANCE FEE ICEP',
      ),
      2788 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301008 - POS Offline',
        'Revenue Name' => 'ACCEPTANCE FEE ICEP - POS OFFLINE',
      ),
      2789 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301008 - POS Online',
        'Revenue Name' => 'ACCEPTANCE FEE ICEP - POS ONLINE',
      ),
      2790 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301009',
        'Revenue Name' => 'SCHOOL FEES ICEP',
      ),
      2791 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301009 - POS Offline',
        'Revenue Name' => 'SCHOOL FEES ICEP - POS OFFLINE',
      ),
      2792 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301009 - POS Online',
        'Revenue Name' => 'SCHOOL FEES ICEP - POS ONLINE',
      ),
      2793 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301010',
        'Revenue Name' => 'ACCEPTANCE FEE SANDWITCH',
      ),
      2794 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301010 - POS Offline',
        'Revenue Name' => 'ACCEPTANCE FEE SANDWITCH - POS OFFLINE',
      ),
      2795 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301010 - POS Online',
        'Revenue Name' => 'ACCEPTANCE FEE SANDWITCH - POS ONLINE',
      ),
      2796 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301011',
        'Revenue Name' => 'SCHOOL FEES SANDWITCH',
      ),
      2797 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301011 - POS Offline',
        'Revenue Name' => 'SCHOOL FEES SANDWITCH - POS OFFLINE',
      ),
      2798 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301011 - POS Online',
        'Revenue Name' => 'SCHOOL FEES SANDWITCH - POS ONLINE',
      ),
      2799 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301012',
        'Revenue Name' => 'ACCEPTANCE FEE PG',
      ),
      2800 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301012 - POS Offline',
        'Revenue Name' => 'ACCEPTANCE FEE PG - POS OFFLINE',
      ),
      2801 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301012 - POS Online',
        'Revenue Name' => 'ACCEPTANCE FEE PG - POS ONLINE',
      ),
      2802 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301013',
        'Revenue Name' => 'PDG SCHOOL FEES',
      ),
      2803 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301013 - POS Offline',
        'Revenue Name' => 'PDG SCHOOL FEES - POS OFFLINE',
      ),
      2804 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301013 - POS Online',
        'Revenue Name' => 'PDG SCHOOL FEES - POS ONLINE',
      ),
      2805 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301014',
        'Revenue Name' => 'MA AND MSC SCHOOL FEES',
      ),
      2806 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301014 - POS Offline',
        'Revenue Name' => 'MA AND MSC SCHOOL FEES - POS OFFLINE',
      ),
      2807 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301014 - POS Online',
        'Revenue Name' => 'MA AND MSC SCHOOL FEES - POS ONLINE',
      ),
      2808 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301015',
        'Revenue Name' => 'MBA AND LLM SCHOOL FEES',
      ),
      2809 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301015 - POS Offline',
        'Revenue Name' => 'MBA AND LLM SCHOOL FEES - POS OFFLINE',
      ),
      2810 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301015 - POS Online',
        'Revenue Name' => 'MBA AND LLM SCHOOL FEES - POS ONLINE',
      ),
      2811 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301016',
        'Revenue Name' => 'PHD SCHOOL FEES',
      ),
      2812 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301016 - POS Offline',
        'Revenue Name' => 'PHD SCHOOL FEES - POS OFFLINE',
      ),
      2813 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301016 - POS Online',
        'Revenue Name' => 'PHD SCHOOL FEES - POS ONLINE',
      ),
      2814 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301017',
        'Revenue Name' => 'TRANSCRIPT LOCAL',
      ),
      2815 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301017 - POS Offline',
        'Revenue Name' => 'TRANSCRIPT LOCAL - POS OFFLINE',
      ),
      2816 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301017 - POS Online',
        'Revenue Name' => 'TRANSCRIPT LOCAL - POS ONLINE',
      ),
      2817 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301018',
        'Revenue Name' => 'TRANSCRIPT INTERNATIONAL',
      ),
      2818 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301018 - POS Offline',
        'Revenue Name' => 'TRANSCRIPT INTERNATIONAL - POS OFFLINE',
      ),
      2819 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301018 - POS Online',
        'Revenue Name' => 'TRANSCRIPT INTERNATIONAL - POS ONLINE',
      ),
      2820 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301019',
        'Revenue Name' => 'PUTME APPLICATION',
      ),
      2821 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301019 - POS Offline',
        'Revenue Name' => 'PUTME APPLICATION - POS OFFLINE',
      ),
      2822 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301019 - POS Online',
        'Revenue Name' => 'PUTME APPLICATION - POS ONLINE',
      ),
      2823 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301020',
        'Revenue Name' => 'SUPPLEMENTARY APPLICATION',
      ),
      2824 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301020 - POS Offline',
        'Revenue Name' => 'SUPPLEMENTARY APPLICATION - POS OFFLINE',
      ),
      2825 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301020 - POS Online',
        'Revenue Name' => 'SUPPLEMENTARY APPLICATION - POS ONLINE',
      ),
      2826 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301021',
        'Revenue Name' => 'PUTME RESULT CHECKING',
      ),
      2827 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301021 - POS Offline',
        'Revenue Name' => 'PUTME RESULT CHECKING - POS OFFLINE',
      ),
      2828 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301021 - POS Online',
        'Revenue Name' => 'PUTME RESULT CHECKING - POS ONLINE',
      ),
      2829 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301022',
        'Revenue Name' => 'ADMISSION STATUS CHECKING',
      ),
      2830 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301022 - POS Offline',
        'Revenue Name' => 'ADMISSION STATUS CHECKING - POS OFFLINE',
      ),
      2831 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301022 - POS Online',
        'Revenue Name' => 'ADMISSION STATUS CHECKING - POS ONLINE',
      ),
      2832 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301023',
        'Revenue Name' => 'PG APPLICATION FORM',
      ),
      2833 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301023 - POS Offline',
        'Revenue Name' => 'PG APPLICATION FORM - POS OFFLINE',
      ),
      2834 => 
      array (
        'Category Code' => '40001001',
        'Category Name' => 'IMO STATE UNIVERSITY',
        'Revenue Code' => '40001001-14301023 - POS Online',
        'Revenue Name' => 'PG APPLICATION FORM - POS ONLINE',
      ),
      2835 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704001',
        'Revenue Name' => 'FORM FOR APPOINTMENT OF CUSTOMARY COURT CHAIRMEN',
      ),
      2836 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704001 - POS Offline',
        'Revenue Name' => 'FORM FOR APPOINTMENT OF CUSTOMARY COURT CHAIRMEN - POS OFFLINE',
      ),
      2837 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704001 - POS Online',
        'Revenue Name' => 'FORM FOR APPOINTMENT OF CUSTOMARY COURT CHAIRMEN - POS ONLINE',
      ),
      2838 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704002',
        'Revenue Name' => 'FORM FOR APPOINTMENT OF C/COURT MEMBERS',
      ),
      2839 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704002 - POS Offline',
        'Revenue Name' => 'FORM FOR APPOINTMENT OF C/COURT MEMBERS - POS OFFLINE',
      ),
      2840 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704002 - POS Online',
        'Revenue Name' => 'FORM FOR APPOINTMENT OF C/COURT MEMBERS - POS ONLINE',
      ),
      2841 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704003',
        'Revenue Name' => 'OTHER FEES',
      ),
      2842 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704003 - POS Offline',
        'Revenue Name' => 'OTHER FEES - POS OFFLINE',
      ),
      2843 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704003 - POS Online',
        'Revenue Name' => 'OTHER FEES - POS ONLINE',
      ),
      2844 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704004',
        'Revenue Name' => 'SALE OF APPLICATION FOR MAGISTRATES/ INSPECTORS',
      ),
      2845 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704004 - POS Offline',
        'Revenue Name' => 'SALE OF APPLICATION FOR MAGISTRATES/ INSPECTORS - POS OFFLINE',
      ),
      2846 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704004 - POS Online',
        'Revenue Name' => 'SALE OF APPLICATION FOR MAGISTRATES/ INSPECTORS - POS ONLINE',
      ),
      2847 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704005',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS',
      ),
      2848 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704005 - POS Offline',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS OFFLINE',
      ),
      2849 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704005 - POS Online',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS ONLINE',
      ),
      2850 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704006',
        'Revenue Name' => 'SALE OF APPLICATION FORMS FOR NON LAWYERS',
      ),
      2851 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704006 - POS Offline',
        'Revenue Name' => 'SALE OF APPLICATION FORMS FOR NON LAWYERS - POS OFFLINE',
      ),
      2852 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '23004001-12704006 - POS Online',
        'Revenue Name' => 'SALE OF APPLICATION FORMS FOR NON LAWYERS - POS ONLINE',
      ),
      2853 => 
      array (
        'Category Code' => '23004001',
        'Category Name' => 'JUDICIAL SERVICE COMMISSION',
        'Revenue Code' => '24001001-12801096',
        'Revenue Name' => 'Approval Fee for Issuance of Statutory Certificate',
      ),
      2854 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703001',
        'Revenue Name' => '10% WHT CONSULTANTS',
      ),
      2855 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703001 - POS Offline',
        'Revenue Name' => '10% WHT CONSULTANTS - POS OFFLINE',
      ),
      2856 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703001 - POS Online',
        'Revenue Name' => '10% WHT CONSULTANTS - POS ONLINE',
      ),
      2857 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703002',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      2858 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703002 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      2859 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703002 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      2860 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703003',
        'Revenue Name' => 'AUCTION SALES',
      ),
      2861 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703003 - POS Offline',
        'Revenue Name' => 'AUCTION SALES - POS OFFLINE',
      ),
      2862 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703003 - POS Online',
        'Revenue Name' => 'AUCTION SALES - POS ONLINE',
      ),
      2863 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703004',
        'Revenue Name' => 'COURT FEES-',
      ),
      2864 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703004 - POS Offline',
        'Revenue Name' => 'COURT FEES - POS OFFLINE',
      ),
      2865 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703004 - POS Online',
        'Revenue Name' => 'COURT FEES - POS ONLINE',
      ),
      2866 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703005',
        'Revenue Name' => 'COURT FINES',
      ),
      2867 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703005 - POS Offline',
        'Revenue Name' => 'COURT FINES - POS OFFLINE',
      ),
      2868 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703005 - POS Online',
        'Revenue Name' => 'COURT FINES - POS ONLINE',
      ),
      2869 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703006',
        'Revenue Name' => 'MONEY IMPOUNDED-',
      ),
      2870 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703006 - POS Offline',
        'Revenue Name' => 'MONEY IMPOUNDED - POS OFFLINE',
      ),
      2871 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703006 - POS Online',
        'Revenue Name' => 'MONEY IMPOUNDED - POS ONLINE',
      ),
      2872 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703007',
        'Revenue Name' => 'OTHER FEES',
      ),
      2873 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703007 - POS Offline',
        'Revenue Name' => 'OTHER FEES - POS OFFLINE',
      ),
      2874 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703007 - POS Online',
        'Revenue Name' => 'OTHER FEES - POS ONLINE',
      ),
      2875 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703008',
        'Revenue Name' => 'REGISTRATION AND RENEWAL FEES CONTRACTOR',
      ),
      2876 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703008 - POS Offline',
        'Revenue Name' => 'REGISTRATION AND RENEWAL FEES CONTRACTOR - POS OFFLINE',
      ),
      2877 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703008 - POS Online',
        'Revenue Name' => 'REGISTRATION AND RENEWAL FEES CONTRACTOR - POS ONLINE',
      ),
      2878 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703009',
        'Revenue Name' => 'SALE OF COURT DELIVERED JUDGEMENT',
      ),
      2879 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703009 - POS Offline',
        'Revenue Name' => 'SALE OF COURT DELIVERED JUDGEMENT - POS OFFLINE',
      ),
      2880 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703009 - POS Online',
        'Revenue Name' => 'CUST COURT OF APPEAL -  SALE OF COURT DELIVERED JUDGEMENT - POS ONLINE',
      ),
      2881 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703010',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS',
      ),
      2882 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703010 - POS Offline',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS OFFLINE',
      ),
      2883 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703010 - POS Online',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS ONLINE',
      ),
      2884 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703011',
        'Revenue Name' => 'TENDER FEES',
      ),
      2885 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703011 - POS Offline',
        'Revenue Name' => 'TENDER FEES - POS OFFLINE',
      ),
      2886 => 
      array (
        'Category Code' => '23003001',
        'Category Name' => 'CUSTOMARY COURT OF APPEAL',
        'Revenue Code' => '23003001-12703011 - POS Online',
        'Revenue Name' => 'TENDER FEES - POS ONLINE',
      ),
      2887 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702001',
        'Revenue Name' => '10% WHT CONSULTANTS',
      ),
      2888 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702001 - POS Offline',
        'Revenue Name' => '10% WHT CONSULTANTS - POS OFFLINE',
      ),
      2889 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702001 - POS Online',
        'Revenue Name' => '10% WHT CONSULTANTS - POS ONLINE',
      ),
      2890 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702002',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      2891 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702002 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      2892 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702002 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      2893 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702003',
        'Revenue Name' => 'COURT FEES - ENVIR SANITATION COURTS',
      ),
      2894 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702003 - POS Offline',
        'Revenue Name' => 'COURT FEES  - POS OFFLINE',
      ),
      2895 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702003 - POS Online',
        'Revenue Name' => 'COURT FEES  - POS ONLINE',
      ),
      2896 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702004',
        'Revenue Name' => 'COURT FINES',
      ),
      2897 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702004 - POS Offline',
        'Revenue Name' => 'COURT FINES - POS OFFLINE',
      ),
      2898 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702004 - POS Online',
        'Revenue Name' => 'COURT FINES - POS ONLINE',
      ),
      2899 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702005',
        'Revenue Name' => 'COURT FINES - ENVIR SANITATION COURTS',
      ),
      2900 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702005 - POS Offline',
        'Revenue Name' => 'COURT FINES  - POS OFFLINE',
      ),
      2901 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702005 - POS Online',
        'Revenue Name' => 'COURT FINES  - POS ONLINE',
      ),
      2902 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702006',
        'Revenue Name' => 'ELECTION TRIBUNAL FEES-',
      ),
      2903 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702006 - POS Offline',
        'Revenue Name' => 'ELECTION TRIBUNAL FEES - POS OFFLINE',
      ),
      2904 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702006 - POS Online',
        'Revenue Name' => 'ELECTION TRIBUNAL FEES - POS ONLINE',
      ),
      2905 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702007',
        'Revenue Name' => 'JUDEMENTS',
      ),
      2906 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702007 - POS Offline',
        'Revenue Name' => 'JUDEMENTS - POS OFFLINE',
      ),
      2907 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702007 - POS Online',
        'Revenue Name' => 'JUDEMENTS - POS ONLINE',
      ),
      2908 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702008',
        'Revenue Name' => 'MONEY IMPOUNDED',
      ),
      2909 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702008 - POS Offline',
        'Revenue Name' => 'MONEY IMPOUNDED - POS OFFLINE',
      ),
      2910 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702008 - POS Online',
        'Revenue Name' => 'MONEY IMPOUNDED - POS ONLINE',
      ),
      2911 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702009',
        'Revenue Name' => 'OTHER FEES',
      ),
      2912 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702009 - POS Offline',
        'Revenue Name' => 'OTHER FEES - POS OFFLINE',
      ),
      2913 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702009 - POS Online',
        'Revenue Name' => 'OTHER FEES - POS ONLINE',
      ),
      2914 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702010',
        'Revenue Name' => 'PROBATE FEES',
      ),
      2915 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702010 - POS Offline',
        'Revenue Name' => 'PROBATE FEES - POS OFFLINE',
      ),
      2916 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702010 - POS Online',
        'Revenue Name' => 'PROBATE FEES - POS ONLINE',
      ),
      2917 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702011',
        'Revenue Name' => 'REPROGRAPHIC SERVICE',
      ),
      2918 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702011 - POS Offline',
        'Revenue Name' => 'REPROGRAPHIC SERVICE - POS OFFLINE',
      ),
      2919 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702011 - POS Online',
        'Revenue Name' => 'REPROGRAPHIC SERVICE - POS ONLINE',
      ),
      2920 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702012',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS',
      ),
      2921 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702012 - POS Offline',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS OFFLINE',
      ),
      2922 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702012 - POS Online',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS ONLINE',
      ),
      2923 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702013',
        'Revenue Name' => 'TENDER FEES',
      ),
      2924 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702013 - POS Offline',
        'Revenue Name' => 'TENDER FEES - POS OFFLINE',
      ),
      2925 => 
      array (
        'Category Code' => '23002001',
        'Category Name' => 'HIGH COURT',
        'Revenue Code' => '23002001-12702013 - POS Online',
        'Revenue Name' => 'TENDER FEES - POS ONLINE',
      ),
      2926 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201001',
        'Revenue Name' => '10% WHT CONSULTANTS',
      ),
      2927 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201001 - POS Offline',
        'Revenue Name' => '10% WHT CONSULTANTS - POS OFFLINE',
      ),
      2928 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201001 - POS Online',
        'Revenue Name' => '10% WHT CONSULTANTS - POS ONLINE',
      ),
      2929 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201002',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      2930 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201002 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      2931 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201002 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      2932 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201003',
        'Revenue Name' => 'EXECUTIVE OF WARRANT OF ARREST',
      ),
      2933 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201003 - POS Offline',
        'Revenue Name' => 'EXECUTIVE OF WARRANT OF ARREST - POS OFFLINE',
      ),
      2934 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201003 - POS Online',
        'Revenue Name' => 'EXECUTIVE OF WARRANT OF ARREST - POS ONLINE',
      ),
      2935 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201004',
        'Revenue Name' => 'HIRE OF 3 CANTEEN',
      ),
      2936 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201004 - POS Offline',
        'Revenue Name' => 'HIRE OF 3 CANTEEN - POS OFFLINE',
      ),
      2937 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201004 - POS Online',
        'Revenue Name' => 'HIRE OF 3 CANTEEN - POS ONLINE',
      ),
      2938 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201005',
        'Revenue Name' => 'HIRE OF FURNITURE & VEHICLES',
      ),
      2939 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201005 - POS Offline',
        'Revenue Name' => 'HIRE OF FURNITURE & VEHICLES - POS OFFLINE',
      ),
      2940 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201005 - POS Online',
        'Revenue Name' => 'HIRE OF FURNITURE & VEHICLES - POS ONLINE',
      ),
      2941 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201006',
        'Revenue Name' => 'HIRE OF STAFF CANTEEN BUILDINGS-',
      ),
      2942 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201006 - POS Offline',
        'Revenue Name' => 'HIRE OF STAFF CANTEEN BUILDINGS - POS OFFLINE',
      ),
      2943 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201006 - POS Online',
        'Revenue Name' => 'HIRE OF STAFF CANTEEN BUILDINGS - POS ONLINE',
      ),
      2944 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201007',
        'Revenue Name' => 'OTHER (HIRE OF STAFF CHAIRS, TABLES AND SPOONS)',
      ),
      2945 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201007 - POS Offline',
        'Revenue Name' => 'OTHER (HIRE OF STAFF CHAIRS, TABLES AND SPOONS) - POS OFFLINE',
      ),
      2946 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201007 - POS Online',
        'Revenue Name' => 'OTHER (HIRE OF STAFF CHAIRS, TABLES AND SPOONS) - POS ONLINE',
      ),
      2947 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201008',
        'Revenue Name' => 'OTHER FEES',
      ),
      2948 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201008 - POS Offline',
        'Revenue Name' => 'OTHER FEES - POS OFFLINE',
      ),
      2949 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201008 - POS Online',
        'Revenue Name' => 'OTHER FEES - POS ONLINE',
      ),
      2950 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201009',
        'Revenue Name' => 'REGISTRATION OF CONTRACTORS',
      ),
      2951 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201009 - POS Offline',
        'Revenue Name' => 'REGISTRATION OF CONTRACTORS - POS OFFLINE',
      ),
      2952 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201009 - POS Online',
        'Revenue Name' => 'REGISTRATION OF CONTRACTORS - POS ONLINE',
      ),
      2953 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201010',
        'Revenue Name' => 'REGISTRATION OF NEW AUTH. COMM.',
      ),
      2954 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201010 - POS Offline',
        'Revenue Name' => 'REGISTRATION OF NEW AUTH. COMM. - POS OFFLINE',
      ),
      2955 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201010 - POS Online',
        'Revenue Name' => 'REGISTRATION OF NEW AUTH. COMM. - POS ONLINE',
      ),
      2956 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201011',
        'Revenue Name' => 'RENEWAL OF CONTRACTORS',
      ),
      2957 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201011 - POS Offline',
        'Revenue Name' => 'RENEWAL OF CONTRACTORS - POS OFFLINE',
      ),
      2958 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201011 - POS Online',
        'Revenue Name' => 'RENEWAL OF CONTRACTORS - POS ONLINE',
      ),
      2959 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201012',
        'Revenue Name' => 'RENT ON GOVT. QUARTERS OUTSIDE IMO STATE-',
      ),
      2960 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201012 - POS Offline',
        'Revenue Name' => 'RENT ON GOVT. QUARTERS OUTSIDE IMO STATE - POS OFFLINE',
      ),
      2961 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201012 - POS Online',
        'Revenue Name' => 'RENT ON GOVT. QUARTERS OUTSIDE IMO STATE - POS ONLINE',
      ),
      2962 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201013',
        'Revenue Name' => 'SALE OF HANSARD',
      ),
      2963 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201013 - POS Offline',
        'Revenue Name' => 'SALE OF HANSARD - POS OFFLINE',
      ),
      2964 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201013 - POS Online',
        'Revenue Name' => 'SALE OF HANSARD - POS ONLINE',
      ),
      2965 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201014',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS',
      ),
      2966 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201014 - POS Offline',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS OFFLINE',
      ),
      2967 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201014 - POS Online',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS ONLINE',
      ),
      2968 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201015',
        'Revenue Name' => 'TENDER FEES',
      ),
      2969 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201015 - POS Offline',
        'Revenue Name' => 'TENDER FEES - POS OFFLINE',
      ),
      2970 => 
      array (
        'Category Code' => '28001001',
        'Category Name' => 'LEGISLATIVE',
        'Revenue Code' => '28001001-13201015 - POS Online',
        'Revenue Name' => 'TENDER FEES - POS ONLINE',
      ),
      2971 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-12051020',
        'Revenue Name' => 'OPERATIONAL PERMIT',
      ),
      2972 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-12051021',
        'Revenue Name' => 'CAPITATION RATE',
      ),
      2973 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701001',
        'Revenue Name' => 'BICYCLE, TRUCK, CANOE, WHEELBARROW AND CART FEES',
      ),
      2974 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701001 - POS Offline',
        'Revenue Name' => 'BICYCLE, TRUCK, CANOE, WHEELBARROW AND CART FEES - POS OFFLINE',
      ),
      2975 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701001 - POS Online',
        'Revenue Name' => 'BICYCLE, TRUCK, CANOE, WHEELBARROW AND CART FEES - POS ONLINE',
      ),
      2976 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701002',
        'Revenue Name' => 'CUSTOMARY BURIAL GROUND PERMIT FEES',
      ),
      2977 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701002 - POS Offline',
        'Revenue Name' => 'CUSTOMARY BURIAL GROUND PERMIT FEES - POS OFFLINE',
      ),
      2978 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701002 - POS Online',
        'Revenue Name' => 'CUSTOMARY BURIAL GROUND PERMIT FEES - POS ONLINE',
      ),
      2979 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701003',
        'Revenue Name' => 'DOMESTIC ANIMAL LICENSE FEES',
      ),
      2980 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701003 - POS Offline',
        'Revenue Name' => 'DOMESTIC ANIMAL LICENSE FEES - POS OFFLINE',
      ),
      2981 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701003 - POS Online',
        'Revenue Name' => 'DOMESTIC ANIMAL LICENSE FEES - POS ONLINE',
      ),
      2982 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701004',
        'Revenue Name' => 'FUMIGATION AND PEST CONTROL FEES',
      ),
      2983 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701004 - POS Offline',
        'Revenue Name' => 'FUMIGATION AND PEST CONTROL FEES - POS OFFLINE',
      ),
      2984 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701004 - POS Online',
        'Revenue Name' => 'FUMIGATION AND PEST CONTROL FEES - POS ONLINE',
      ),
      2985 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701005',
        'Revenue Name' => 'LIQUOR LICENSE FEES',
      ),
      2986 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701005 - POS Offline',
        'Revenue Name' => 'LIQUOR LICENSE FEES - POS OFFLINE',
      ),
      2987 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701005 - POS Online',
        'Revenue Name' => 'LIQUOR LICENSE FEES - POS ONLINE',
      ),
      2988 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701006',
        'Revenue Name' => 'MARKET TAXES AND LEVIES',
      ),
      2989 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701006 - POS Offline',
        'Revenue Name' => 'MARKET TAXES AND LEVIES - POS OFFLINE',
      ),
      2990 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701006 - POS Online',
        'Revenue Name' => 'MARKET TAXES AND LEVIES - POS ONLINE',
      ),
      2991 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701007',
        'Revenue Name' => 'MARRIAGE, BIRTH AND DEATH REGISTRATION FEE',
      ),
      2992 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701007 - POS Offline',
        'Revenue Name' => 'MARRIAGE, BIRTH AND DEATH REGISTRATION FEE - POS OFFLINE',
      ),
      2993 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701007 - POS Online',
        'Revenue Name' => 'MARRIAGE, BIRTH AND DEATH REGISTRATION FEE - POS ONLINE',
      ),
      2994 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701008',
        'Revenue Name' => 'MERRIMENT AND ROAD CLOSURE LEVY',
      ),
      2995 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701008 - POS Offline',
        'Revenue Name' => 'MERRIMENT AND ROAD CLOSURE LEVY - POS OFFLINE',
      ),
      2996 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701008 - POS Online',
        'Revenue Name' => 'MERRIMENT AND ROAD CLOSURE LEVY - POS ONLINE',
      ),
      2997 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701009',
        'Revenue Name' => 'MOTOR PARK LEVIES',
      ),
      2998 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701009 - POS Offline',
        'Revenue Name' => 'MOTOR PARK LEVIES - POS OFFLINE',
      ),
      2999 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701009 - POS Online',
        'Revenue Name' => 'MOTOR PARK LEVIES - POS ONLINE',
      ),
      3000 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701010',
        'Revenue Name' => 'RADIO AND TELEVISION LICENSE FEES',
      ),
      3001 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701010 - POS Offline',
        'Revenue Name' => 'RADIO AND TELEVISION LICENSE FEES - POS OFFLINE',
      ),
      3002 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701010 - POS Online',
        'Revenue Name' => 'RADIO AND TELEVISION LICENSE FEES - POS ONLINE',
      ),
      3003 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701011',
        'Revenue Name' => 'RELIGIOUS PLACES ESTABLISHMENT PERMIT FEES',
      ),
      3004 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701011 - POS Offline',
        'Revenue Name' => 'RELIGIOUS PLACES ESTABLISHMENT PERMIT FEES - POS OFFLINE',
      ),
      3005 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701011 - POS Online',
        'Revenue Name' => 'RELIGIOUS PLACES ESTABLISHMENT PERMIT FEES - POS ONLINE',
      ),
      3006 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701012',
        'Revenue Name' => 'RIGHT OF OCCUPANCY FEES',
      ),
      3007 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701012 - POS Offline',
        'Revenue Name' => 'RIGHT OF OCCUPANCY FEES - POS OFFLINE',
      ),
      3008 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701012 - POS Online',
        'Revenue Name' => 'RIGHT OF OCCUPANCY FEES - POS ONLINE',
      ),
      3009 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701013',
        'Revenue Name' => 'SEWAGE DISPOSAL FEES',
      ),
      3010 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701013 - POS Offline',
        'Revenue Name' => 'SEWAGE DISPOSAL FEES - POS OFFLINE',
      ),
      3011 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701013 - POS Online',
        'Revenue Name' => 'SEWAGE DISPOSAL FEES - POS ONLINE',
      ),
      3012 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701014',
        'Revenue Name' => 'SHOPS AND KIOSKS RATES',
      ),
      3013 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701014 - POS Offline',
        'Revenue Name' => 'SHOPS AND KIOSKS RATES - POS OFFLINE',
      ),
      3014 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701014 - POS Online',
        'Revenue Name' => 'SHOPS AND KIOSKS RATES - POS ONLINE',
      ),
      3015 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701015',
        'Revenue Name' => 'SLAUGHTER SLAB FEES',
      ),
      3016 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701015 - POS Offline',
        'Revenue Name' => 'SLAUGHTER SLAB FEES - POS OFFLINE',
      ),
      3017 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701015 - POS Online',
        'Revenue Name' => 'SLAUGHTER SLAB FEES - POS ONLINE',
      ),
      3018 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701016',
        'Revenue Name' => 'STALLAGE FEES',
      ),
      3019 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701016 - POS Offline',
        'Revenue Name' => 'STALLAGE FEES - POS OFFLINE',
      ),
      3020 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701016 - POS Online',
        'Revenue Name' => 'STALLAGE FEES - POS ONLINE',
      ),
      3021 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701017',
        'Revenue Name' => 'STREET NAMING FEES',
      ),
      3022 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701017 - POS Offline',
        'Revenue Name' => 'STREET NAMING FEES - POS OFFLINE',
      ),
      3023 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701017 - POS Online',
        'Revenue Name' => 'STREET NAMING FEES - POS ONLINE',
      ),
      3024 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701018',
        'Revenue Name' => 'TENEMENT RATES',
      ),
      3025 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701018 - POS Offline',
        'Revenue Name' => 'TENEMENT RATES - POS OFFLINE',
      ),
      3026 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701018 - POS Online',
        'Revenue Name' => 'TENEMENT RATES - POS ONLINE',
      ),
      3027 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701019',
        'Revenue Name' => 'VEHICLE RADIO LICENSE FEES',
      ),
      3028 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701019 - POS Offline',
        'Revenue Name' => 'VEHICLE RADIO LICENSE FEES - POS OFFLINE',
      ),
      3029 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701019 - POS Online',
        'Revenue Name' => 'VEHICLE RADIO LICENSE FEES - POS ONLINE',
      ),
      3030 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701020',
        'Revenue Name' => 'WRONG PARKING CHARGES',
      ),
      3031 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701020 - POS Offline',
        'Revenue Name' => 'WRONG PARKING CHARGES - POS OFFLINE',
      ),
      3032 => 
      array (
        'Category Code' => '33001001',
        'Category Name' => 'LOCAL GOVERNMENT',
        'Revenue Code' => '33001001-13701020 - POS Online',
        'Revenue Name' => 'WRONG PARKING CHARGES - POS ONLINE',
      ),
      3033 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061001',
        'Revenue Name' => '10% WHT CONSULTANTS',
      ),
      3034 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061001 - POS Offline',
        'Revenue Name' => '10% WHT CONSULTANTS - POS OFFLINE',
      ),
      3035 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061001 - POS Online',
        'Revenue Name' => '10% WHT CONSULTANTS - POS ONLINE',
      ),
      3036 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061002',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      3037 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061002 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      3038 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061002 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      3039 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061003',
        'Revenue Name' => 'CATH FEES - L.G.S.C.',
      ),
      3040 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061003 - POS Offline',
        'Revenue Name' => 'CATH FEES  -  L.G.S.C. - POS OFFLINE',
      ),
      3041 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061003 - POS Online',
        'Revenue Name' => 'CATH FEES  -  L.G.S.C. - POS ONLINE',
      ),
      3042 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061004',
        'Revenue Name' => 'FEES',
      ),
      3043 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061004 - POS Offline',
        'Revenue Name' => 'FEES - POS OFFLINE',
      ),
      3044 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061004 - POS Online',
        'Revenue Name' => 'FEES - POS ONLINE',
      ),
      3045 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061005',
        'Revenue Name' => 'LOCAL GOVERNMENT SERVICE EXAMINATION FEES',
      ),
      3046 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061005 - POS Offline',
        'Revenue Name' => 'LOCAL GOVERNMENT SERVICE EXAMINATION FEES - POS OFFLINE',
      ),
      3047 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061005 - POS Online',
        'Revenue Name' => 'LOCAL GOVERNMENT SERVICE EXAMINATION FEES - POS ONLINE',
      ),
      3048 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061006',
        'Revenue Name' => 'OATH FEES (L.G.S.C)',
      ),
      3049 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061006 - POS Offline',
        'Revenue Name' => 'OATH FEES (L.G.S.C) - POS OFFLINE',
      ),
      3050 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061006 - POS Online',
        'Revenue Name' => 'OATH FEES (L.G.S.C) - POS ONLINE',
      ),
      3051 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061007',
        'Revenue Name' => 'REGISTRATION OF CONSULTANTS',
      ),
      3052 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061007 - POS Offline',
        'Revenue Name' => 'REGISTRATION OF CONSULTANTS - POS OFFLINE',
      ),
      3053 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061007 - POS Online',
        'Revenue Name' => 'REGISTRATION OF CONSULTANTS - POS ONLINE',
      ),
      3054 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061008',
        'Revenue Name' => 'REGISTRATION OF CONTRACTORS',
      ),
      3055 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061008 - POS Offline',
        'Revenue Name' => 'REGISTRATION OF CONTRACTORS - POS OFFLINE',
      ),
      3056 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061008 - POS Online',
        'Revenue Name' => 'REGISTRATION OF CONTRACTORS - POS ONLINE',
      ),
      3057 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061009',
        'Revenue Name' => 'SALE OF EMPLOYMENT FORMS',
      ),
      3058 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061009 - POS Offline',
        'Revenue Name' => 'SALE OF EMPLOYMENT FORMS - POS OFFLINE',
      ),
      3059 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061009 - POS Online',
        'Revenue Name' => 'SALE OF EMPLOYMENT FORMS - POS ONLINE',
      ),
      3060 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061010',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS',
      ),
      3061 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061010 - POS Offline',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS OFFLINE',
      ),
      3062 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061010 - POS Online',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS ONLINE',
      ),
      3063 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061011',
        'Revenue Name' => 'SALE OF PUBLICATIONS - L.G.S.C.',
      ),
      3064 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061011 - POS Offline',
        'Revenue Name' => 'SALE OF PUBLICATIONS  -  L.G.S.C. - POS OFFLINE',
      ),
      3065 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061011 - POS Online',
        'Revenue Name' => 'SALE OF PUBLICATIONS  -  L.G.S.C. - POS ONLINE',
      ),
      3066 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061012',
        'Revenue Name' => 'SALES OF EMPLOYMENT FORMS',
      ),
      3067 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061012 - POS Offline',
        'Revenue Name' => 'SALES OF EMPLOYMENT FORMS - POS OFFLINE',
      ),
      3068 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061012 - POS Online',
        'Revenue Name' => 'SALES OF EMPLOYMENT FORMS - POS ONLINE',
      ),
      3069 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061013',
        'Revenue Name' => 'SALES OF PUBLICATION (L.G.S.C)',
      ),
      3070 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061013 - POS Offline',
        'Revenue Name' => 'SALES OF PUBLICATION (L.G.S.C) - POS OFFLINE',
      ),
      3071 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061013 - POS Online',
        'Revenue Name' => 'SALES OF PUBLICATION (L.G.S.C) - POS ONLINE',
      ),
      3072 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061014',
        'Revenue Name' => 'STAMP DUTIES',
      ),
      3073 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061014 - POS Offline',
        'Revenue Name' => 'STAMP DUTIES - POS OFFLINE',
      ),
      3074 => 
      array (
        'Category Code' => '14002001',
        'Category Name' => 'LOCAL GOVERNMENT SERVICE COMMISSION',
        'Revenue Code' => '14002001-12061014 - POS Online',
        'Revenue Name' => 'STAMP DUTIES - POS ONLINE',
      ),
      3075 => 
      array (
        'Category Code' => '11007001',
        'Category Name' => 'OFFICE OF DEPUTY GOVERNOR',
        'Revenue Code' => '11007001-12016001',
        'Revenue Name' => '10% WHT ON CONSULTANTS',
      ),
      3076 => 
      array (
        'Category Code' => '11007001',
        'Category Name' => 'OFFICE OF DEPUTY GOVERNOR',
        'Revenue Code' => '11007001-12016001 - POS Offline',
        'Revenue Name' => '10% WHT ON CONSULTANTS - POS OFFLINE',
      ),
      3077 => 
      array (
        'Category Code' => '11007001',
        'Category Name' => 'OFFICE OF DEPUTY GOVERNOR',
        'Revenue Code' => '11007001-12016001 - POS Online',
        'Revenue Name' => '10% WHT ON CONSULTANTS - POS ONLINE',
      ),
      3078 => 
      array (
        'Category Code' => '11003001',
        'Category Name' => 'OFFICE OF THE ACCOUNTANT GENERAL',
        'Revenue Code' => '11003001-12012001',
        'Revenue Name' => '10% WHT CONSULTANTS',
      ),
      3079 => 
      array (
        'Category Code' => '11003001',
        'Category Name' => 'OFFICE OF THE ACCOUNTANT GENERAL',
        'Revenue Code' => '11003001-12012001 - POS Offline',
        'Revenue Name' => '10% WHT CONSULTANTS - POS OFFLINE',
      ),
      3080 => 
      array (
        'Category Code' => '11003001',
        'Category Name' => 'OFFICE OF THE ACCOUNTANT GENERAL',
        'Revenue Code' => '11003001-12012001 - POS Online',
        'Revenue Name' => 'OFFICE OF THE ACCOUNTANT GENERAL-10% WHT CONSULTANTS - POS ONLINE',
      ),
      3081 => 
      array (
        'Category Code' => '11003001',
        'Category Name' => 'OFFICE OF THE ACCOUNTANT GENERAL',
        'Revenue Code' => '11003001-12012002',
        'Revenue Name' => 'OFFICE OF THE ACCOUNTANT GENERAL - 5% WHT ON CONTRACTS',
      ),
      3082 => 
      array (
        'Category Code' => '11003001',
        'Category Name' => 'OFFICE OF THE ACCOUNTANT GENERAL',
        'Revenue Code' => '11003001-12012002 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      3083 => 
      array (
        'Category Code' => '11003001',
        'Category Name' => 'OFFICE OF THE ACCOUNTANT GENERAL',
        'Revenue Code' => '11003001-12012002 - POS Online',
        'Revenue Name' => 'OFFICE OF THE ACCOUNTANT GENERAL-5% WHT ON CONTRACTS - POS ONLINE',
      ),
      3084 => 
      array (
        'Category Code' => '11005001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL LOCAL GOVERNMENT IMO',
        'Revenue Code' => '11005001-12014001',
        'Revenue Name' => 'ARREARS OF AUDIT FEES',
      ),
      3085 => 
      array (
        'Category Code' => '11005001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL LOCAL GOVERNMENT IMO',
        'Revenue Code' => '11005001-12014002',
        'Revenue Name' => 'REG./RENEWAL OF FIRMS OF CHARTERED ACCOUNTANTS',
      ),
      3086 => 
      array (
        'Category Code' => '11005001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL LOCAL GOVERNMENT IMO',
        'Revenue Code' => '11005001-12014003',
        'Revenue Name' => 'REGISTRATION OF CHARTERED ACCOUNTS',
      ),
      3087 => 
      array (
        'Category Code' => '11005001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL LOCAL GOVERNMENT IMO',
        'Revenue Code' => '11005001-12014004',
        'Revenue Name' => 'REGISTRATION OF EXTERNAL AUDITORS',
      ),
      3088 => 
      array (
        'Category Code' => '11005001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL LOCAL GOVERNMENT IMO',
        'Revenue Code' => '11005001-12014005',
        'Revenue Name' => 'RENEWAL OF EXTERNAL AUDITORS',
      ),
      3089 => 
      array (
        'Category Code' => '11005001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL LOCAL GOVERNMENT IMO',
        'Revenue Code' => '11005001-12014006',
        'Revenue Name' => 'AUDIT FEES',
      ),
      3090 => 
      array (
        'Category Code' => '11005001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL LOCAL GOVERNMENT IMO',
        'Revenue Code' => '11005001-12014007',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS',
      ),
      3091 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013001',
        'Revenue Name' => 'RENEWAL OF FIRMS OF CHARTERED ACCOUNTS',
      ),
      3092 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013001 - POS Offline',
        'Revenue Name' => 'RENEWAL OF FIRMS OF CHARTERED ACCOUNTS - POS OFFLINE',
      ),
      3093 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013001 - POS Online',
        'Revenue Name' => 'RENEWAL OF FIRMS OF CHARTERED ACCOUNTS - POS ONLINE',
      ),
      3094 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013002',
        'Revenue Name' => 'REG/RENEWAL OF FIRMS OF CHARTERED ACCOUNTS',
      ),
      3095 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013002 - POS Offline',
        'Revenue Name' => 'REG/RENEWAL OF FIRMS OF CHARTERED ACCOUNTS - POS OFFLINE',
      ),
      3096 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013002 - POS Online',
        'Revenue Name' => 'REG/RENEWAL OF FIRMS OF CHARTERED ACCOUNTS - POS ONLINE',
      ),
      3097 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013003',
        'Revenue Name' => 'REG. RENEWAL FIRMS OF CHARTERED ACCOUNTANTS',
      ),
      3098 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013003 - POS Offline',
        'Revenue Name' => 'REG. RENEWAL FIRMS OF CHARTERED ACCOUNTANTS - POS OFFLINE',
      ),
      3099 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013003 - POS Online',
        'Revenue Name' => 'REG. RENEWAL FIRMS OF CHARTERED ACCOUNTANTS - POS ONLINE',
      ),
      3100 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013004',
        'Revenue Name' => 'ARREARS OF AUDIT FEES',
      ),
      3101 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013004 - POS Offline',
        'Revenue Name' => 'ARREARS OF AUDIT FEES - POS OFFLINE',
      ),
      3102 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013004 - POS Online',
        'Revenue Name' => 'ARREARS OF AUDIT FEES - POS ONLINE',
      ),
      3103 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013005',
        'Revenue Name' => 'RENEWAL OF FIRMS OF CHARTERED ACCOUNTS',
      ),
      3104 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013005 - POS Offline',
        'Revenue Name' => 'RENEWAL OF FIRMS OF CHARTERED ACCOUNTS - POS OFFLINE',
      ),
      3105 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013005 - POS Online',
        'Revenue Name' => 'RENEWAL OF FIRMS OF CHARTERED ACCOUNTS - POS ONLINE',
      ),
      3106 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013006',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS',
      ),
      3107 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013006 - POS Offline',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS OFFLINE',
      ),
      3108 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013006 - POS Online',
        'Revenue Name' => 'SALE OF OLD NEWSPAPERS - POS ONLINE',
      ),
      3109 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013007',
        'Revenue Name' => 'HIRE OF GOVT. VEHICLES',
      ),
      3110 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013007 - POS Offline',
        'Revenue Name' => 'HIRE OF GOVT. VEHICLES - POS OFFLINE',
      ),
      3111 => 
      array (
        'Category Code' => '11004001',
        'Category Name' => 'OFFICE OF THE AUDITOR GENERAL STATE',
        'Revenue Code' => '11004001-12013007 - POS Online',
        'Revenue Name' => 'HIRE OF GOVT. VEHICLES - POS ONLINE',
      ),
      3112 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010001',
        'Revenue Name' => '5% WITHHOLDING TAX ON CONTRACTS - MDGS',
      ),
      3113 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010001 - POS Offline',
        'Revenue Name' => '5% WITHHOLDING TAX ON CONTRACTS  -  MDGS - POS OFFLINE',
      ),
      3114 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010001 - POS Online',
        'Revenue Name' => '5% WITHHOLDING TAX ON CONTRACTS  -  MDGS - POS ONLINE',
      ),
      3115 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010002',
        'Revenue Name' => 'ENTRACO - FINES AND FEES',
      ),
      3116 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010002 - POS Offline',
        'Revenue Name' => 'ENTRACO  -  FINES AND FEES - POS OFFLINE',
      ),
      3117 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010002 - POS Online',
        'Revenue Name' => 'ENTRACO  -  FINES AND FEES - POS ONLINE',
      ),
      3118 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010003',
        'Revenue Name' => 'SECURITY LEVY',
      ),
      3119 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010003 - POS Offline',
        'Revenue Name' => 'SECURITY LEVY - POS OFFLINE',
      ),
      3120 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010003 - POS Online',
        'Revenue Name' => 'SECURITY LEVY - POS ONLINE',
      ),
      3121 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010004',
        'Revenue Name' => 'MDGS',
      ),
      3122 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010004 - POS Offline',
        'Revenue Name' => 'MDGS - POS OFFLINE',
      ),
      3123 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010004 - POS Online',
        'Revenue Name' => 'MDGS - POS ONLINE',
      ),
      3124 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010005',
        'Revenue Name' => 'HEARTLAND FC GATE PROCEEDS',
      ),
      3125 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010005 - POS Offline',
        'Revenue Name' => 'HEARTLAND FC GATE PROCEEDS - POS OFFLINE',
      ),
      3126 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010005 - POS Online',
        'Revenue Name' => 'HEARTLAND FC GATE PROCEEDS - POS ONLINE',
      ),
      3127 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010006',
        'Revenue Name' => 'GENERAL OBLIGATION BOND ISSUES',
      ),
      3128 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010006 - POS Offline',
        'Revenue Name' => 'GENERAL OBLIGATION BOND ISSUES - POS OFFLINE',
      ),
      3129 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010006 - POS Online',
        'Revenue Name' => 'GENERAL OBLIGATION BOND ISSUES - POS ONLINE',
      ),
      3130 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010007',
        'Revenue Name' => '10% WHT ON CONSULTANTS',
      ),
      3131 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010007 - POS Offline',
        'Revenue Name' => '10% WHT ON CONSULTANTS - POS OFFLINE',
      ),
      3132 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010007 - POS Online',
        'Revenue Name' => '10% WHT ON CONSULTANTS - POS ONLINE',
      ),
      3133 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010008',
        'Revenue Name' => 'TENDER FEES',
      ),
      3134 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010008 - POS Offline',
        'Revenue Name' => 'TENDER FEES - POS OFFLINE',
      ),
      3135 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010008 - POS Online',
        'Revenue Name' => 'TENDER FEES - POS ONLINE',
      ),
      3136 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010009',
        'Revenue Name' => 'OTHERS',
      ),
      3137 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010009 - POS Offline',
        'Revenue Name' => 'OTHERS - POS OFFLINE',
      ),
      3138 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010009 - POS Online',
        'Revenue Name' => 'OTHERS - POS ONLINE',
      ),
      3139 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010010',
        'Revenue Name' => 'AFFILIATION FEES',
      ),
      3140 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010010 - POS Offline',
        'Revenue Name' => 'AFFILIATION FEES - POS OFFLINE',
      ),
      3141 => 
      array (
        'Category Code' => '11001001',
        'Category Name' => 'OFFICE OF THE EXECUTIVE GOVERNOR',
        'Revenue Code' => '11001001-12010010 - POS Online',
        'Revenue Name' => 'AFFILIATION FEES - POS ONLINE',
      ),
      3142 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015001',
        'Revenue Name' => 'CIVIL SERVICE EXAMINATION FEES',
      ),
      3143 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015001 - POS Offline',
        'Revenue Name' => 'CIVIL SERVICE EXAMINATION FEES - POS OFFLINE',
      ),
      3144 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015001 - POS Online',
        'Revenue Name' => 'CIVIL SERVICE EXAMINATION FEES - POS ONLINE',
      ),
      3145 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015002',
        'Revenue Name' => 'STAFF DEVELOPMENT CENTRE FEES',
      ),
      3146 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015002 - POS Offline',
        'Revenue Name' => 'STAFF DEVELOPMENT CENTRE FEES - POS OFFLINE',
      ),
      3147 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015002 - POS Online',
        'Revenue Name' => 'STAFF DEVELOPMENT CENTRE FEES - POS ONLINE',
      ),
      3148 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015003',
        'Revenue Name' => 'PENSION FUND ADMIN FEES',
      ),
      3149 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015003 - POS Offline',
        'Revenue Name' => 'PENSION FUND ADMIN FEES - POS OFFLINE',
      ),
      3150 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015003 - POS Online',
        'Revenue Name' => 'PENSION FUND ADMIN FEES - POS ONLINE',
      ),
      3151 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015004',
        'Revenue Name' => 'COMMON SERVICES OPERATIONS',
      ),
      3152 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015004 - POS Offline',
        'Revenue Name' => 'COMMON SERVICES OPERATIONS - POS OFFLINE',
      ),
      3153 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015004 - POS Online',
        'Revenue Name' => 'COMMON SERVICES OPERATIONS - POS ONLINE',
      ),
      3154 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015005',
        'Revenue Name' => 'APPLICATION FORM FOR TEMPORARY STORES',
      ),
      3155 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015005 - POS Offline',
        'Revenue Name' => 'APPLICATION FORM FOR TEMPORARY STORES - POS OFFLINE',
      ),
      3156 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015005 - POS Online',
        'Revenue Name' => 'APPLICATION FORM FOR TEMPORARY STORES - POS ONLINE',
      ),
      3157 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015006',
        'Revenue Name' => 'SALE OF STAFF LIST',
      ),
      3158 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015006 - POS Offline',
        'Revenue Name' => 'SALE OF STAFF LIST - POS OFFLINE',
      ),
      3159 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015006 - POS Online',
        'Revenue Name' => 'SALE OF STAFF LIST - POS ONLINE',
      ),
      3160 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015007',
        'Revenue Name' => 'SALE OF PUBLIC SERVICE LECTURE',
      ),
      3161 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015007 - POS Offline',
        'Revenue Name' => 'SALE OF PUBLIC SERVICE LECTURE - POS OFFLINE',
      ),
      3162 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015007 - POS Online',
        'Revenue Name' => 'POS ONLINE',
      ),
      3163 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015008',
        'Revenue Name' => 'SALE OF PUBLIC SERVICE BULLETIN',
      ),
      3164 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015008 - POS Offline',
        'Revenue Name' => 'SALE OF PUBLIC SERVICE BULLETIN - POS OFFLINE',
      ),
      3165 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015008 - POS Online',
        'Revenue Name' => 'SALE OF PUBLIC SERVICE BULLETIN - POS ONLINE',
      ),
      3166 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015009',
        'Revenue Name' => 'SALE OF ESTABLISHMENT CIRCULAR',
      ),
      3167 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015009 - POS Offline',
        'Revenue Name' => 'SALE OF ESTABLISHMENT CIRCULAR - POS OFFLINE',
      ),
      3168 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015009 - POS Online',
        'Revenue Name' => 'SALE OF ESTABLISHMENT CIRCULAR - POS ONLINE',
      ),
      3169 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015010',
        'Revenue Name' => 'SALE OF PUBLIC SERVICE RULES AND MANUAL',
      ),
      3170 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015010 - POS Offline',
        'Revenue Name' => 'SALE OF PUBLIC SERVICE RULES AND MANUAL - POS OFFLINE',
      ),
      3171 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015010 - POS Online',
        'Revenue Name' => 'SALE OF PUBLIC SERVICE RULES AND MANUAL - POS ONLINE',
      ),
      3172 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015011',
        'Revenue Name' => 'STAFF DEV. CENTRE CANTEEN/HALL HIRE CHARGE',
      ),
      3173 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015011 - POS Offline',
        'Revenue Name' => 'STAFF DEV. CENTRE CANTEEN/HALL HIRE CHARGE - POS OFFLINE',
      ),
      3174 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015011 - POS Online',
        'Revenue Name' => 'STAFF DEV. CENTRE CANTEEN/HALL HIRE CHARGE - POS ONLINE',
      ),
      3175 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015012',
        'Revenue Name' => 'REPLACEMENT OF IDENTITY CARDS',
      ),
      3176 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015012 - POS Offline',
        'Revenue Name' => 'REPLACEMENT OF IDENTITY CARDS - POS OFFLINE',
      ),
      3177 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015012 - POS Online',
        'Revenue Name' => 'REPLACEMENT OF IDENTITY CARDS - POS ONLINE',
      ),
      3178 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015013',
        'Revenue Name' => 'TRACING FEES PENSION AND RECORDS',
      ),
      3179 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015013 - POS Offline',
        'Revenue Name' => 'TRACING FEES PENSION AND RECORDS - POS OFFLINE',
      ),
      3180 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015013 - POS Online',
        'Revenue Name' => 'TRACING FEES PENSION AND RECORDS - POS ONLINE',
      ),
      3181 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015014',
        'Revenue Name' => 'TUITION FEE',
      ),
      3182 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015014 - POS Offline',
        'Revenue Name' => 'TUITION FEE - POS OFFLINE',
      ),
      3183 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015014 - POS Online',
        'Revenue Name' => 'TUITION FEE - POS ONLINE',
      ),
      3184 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015015',
        'Revenue Name' => 'PENSION ID CARD',
      ),
      3185 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015015 - POS Offline',
        'Revenue Name' => 'PENSION ID CARD - POS OFFLINE',
      ),
      3186 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015015 - POS Online',
        'Revenue Name' => 'PENSION ID CARD - POS ONLINE',
      ),
      3187 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015016',
        'Revenue Name' => 'FEES FOR COURSE CONDUCTED FOR EXTERNAL BODIES',
      ),
      3188 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015016 - POS Offline',
        'Revenue Name' => 'FEES FOR COURSE CONDUCTED FOR EXTERNAL BODIES - POS OFFLINE',
      ),
      3189 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015016 - POS Online',
        'Revenue Name' => 'FEES FOR COURSE CONDUCTED FOR EXTERNAL BODIES - POS ONLINE',
      ),
      3190 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015017',
        'Revenue Name' => 'LEASE OF STAFF CANTEEN BUILDINGS',
      ),
      3191 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015017 - POS Offline',
        'Revenue Name' => 'LEASE OF STAFF CANTEEN BUILDINGS - POS OFFLINE',
      ),
      3192 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015017 - POS Online',
        'Revenue Name' => 'LEASE OF STAFF CANTEEN BUILDINGS - POS ONLINE',
      ),
      3193 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015018',
        'Revenue Name' => 'LEASE OF SECRETARIAT GATE HOUSES',
      ),
      3194 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015018 - POS Offline',
        'Revenue Name' => 'LEASE OF SECRETARIAT GATE HOUSES - POS OFFLINE',
      ),
      3195 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015018 - POS Online',
        'Revenue Name' => 'LEASE OF SECRETARIAT GATE HOUSES - POS ONLINE',
      ),
      3196 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015019',
        'Revenue Name' => 'COMMERCIAL OPERATION IN SECRETARIAT',
      ),
      3197 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015019 - POS Offline',
        'Revenue Name' => 'COMMERCIAL OPERATION IN SECRETARIAT - POS OFFLINE',
      ),
      3198 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015019 - POS Online',
        'Revenue Name' => 'COMMERCIAL OPERATION IN SECRETARIAT - POS ONLINE',
      ),
      3199 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015020',
        'Revenue Name' => 'FEDERAL SHARE OF PENSIONS AND FEDERAL GRATUITIES',
      ),
      3200 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015020 - POS Offline',
        'Revenue Name' => 'FEDERAL SHARE OF PENSIONS AND FEDERAL GRATUITIES - POS OFFLINE',
      ),
      3201 => 
      array (
        'Category Code' => '11006001',
        'Category Name' => 'OFFICE OF THE HEAD OF SERVICE',
        'Revenue Code' => '11006001-12015020 - POS Online',
        'Revenue Name' => 'FEDERAL SHARE OF PENSIONS AND FEDERAL GRATUITIES - POS ONLINE',
      ),
      3202 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011001',
        'Revenue Name' => 'ACCEPTANCE FEE FOR PILGRIMAGE',
      ),
      3203 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011001 - POS Offline',
        'Revenue Name' => 'ACCEPTANCE FEE FOR PILGRIMAGE - POS OFFLINE',
      ),
      3204 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011001 - POS Online',
        'Revenue Name' => 'ACCEPTANCE FEE FOR PILGRIMAGE - POS ONLINE',
      ),
      3205 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011002',
        'Revenue Name' => 'STATE APPROVED PILGRIMS FEE',
      ),
      3206 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011002 - POS Offline',
        'Revenue Name' => 'STATE APPROVED PILGRIMS FEE - POS OFFLINE',
      ),
      3207 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011002 - POS Online',
        'Revenue Name' => 'STATE APPROVED PILGRIMS FEE - POS ONLINE',
      ),
      3208 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011003',
        'Revenue Name' => 'STATE SHARE OF SALE OF PILGRIMS',
      ),
      3209 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011003 - POS Offline',
        'Revenue Name' => 'STATE SHARE OF SALE OF PILGRIMS - POS OFFLINE',
      ),
      3210 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011003 - POS Online',
        'Revenue Name' => 'STATE SHARE OF SALE OF PILGRIMS - POS ONLINE',
      ),
      3211 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011004',
        'Revenue Name' => 'SALE OF P.T.F. BICYCLES',
      ),
      3212 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011004 - POS Offline',
        'Revenue Name' => 'SALE OF P.T.F. BICYCLES - POS OFFLINE',
      ),
      3213 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011004 - POS Online',
        'Revenue Name' => 'SALE OF P.T.F. BICYCLES - POS ONLINE',
      ),
      3214 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011005',
        'Revenue Name' => 'SALE OF OLD VEHICLES',
      ),
      3215 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011005 - POS Offline',
        'Revenue Name' => 'SALE OF OLD VEHICLES - POS OFFLINE',
      ),
      3216 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011005 - POS Online',
        'Revenue Name' => 'SALE OF OLD VEHICLES - POS ONLINE',
      ),
      3217 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011006',
        'Revenue Name' => 'PROCESSING OF PILGRIMS FORMS',
      ),
      3218 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011006 - POS Offline',
        'Revenue Name' => 'PROCESSING OF PILGRIMS FORMS - POS OFFLINE',
      ),
      3219 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011006 - POS Online',
        'Revenue Name' => 'PROCESSING OF PILGRIMS FORMS - POS ONLINE',
      ),
      3220 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011007',
        'Revenue Name' => 'PILGRIMS OK FEES',
      ),
      3221 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011007 - POS Offline',
        'Revenue Name' => 'PILGRIMS OK FEES - POS OFFLINE',
      ),
      3222 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011007 - POS Online',
        'Revenue Name' => 'PILGRIMS OK FEES - POS ONLINE',
      ),
      3223 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011008',
        'Revenue Name' => 'INSPECTION CETTING FEE FOR NGOS CSOS',
      ),
      3224 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011008 - POS Offline',
        'Revenue Name' => 'INSPECTION CETTING FEE FOR NGOS CSOS - POS OFFLINE',
      ),
      3225 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011008 - POS Online',
        'Revenue Name' => 'INSPECTION CETTING FEE FOR NGOS CSOS - POS',
      ),
      3226 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011009',
        'Revenue Name' => 'ISSUE OF CERTIFICATE FEES',
      ),
      3227 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011009 - POS Offline',
        'Revenue Name' => 'ISSUE OF CERTIFICATE FEES - POS OFFLINE',
      ),
      3228 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011009 - POS Online',
        'Revenue Name' => 'ISSUE OF CERTIFICATE FEES - POS ONLINE',
      ),
      3229 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011010',
        'Revenue Name' => 'CLINICS',
      ),
      3230 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011010 - POS Offline',
        'Revenue Name' => 'CLINICS - POS OFFLINE',
      ),
      3231 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011010 - POS Online',
        'Revenue Name' => 'CLINICS - POS ONLINE',
      ),
      3232 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011011',
        'Revenue Name' => 'WELFARE FORMS',
      ),
      3233 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011011 - POS Offline',
        'Revenue Name' => 'WELFARE FORMS - POS OFFLINE',
      ),
      3234 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011011 - POS Online',
        'Revenue Name' => 'WELFARE FORMS - POS ONLINE',
      ),
      3235 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011012',
        'Revenue Name' => 'SALE OF CONDEMNED FURNITURE AND EQUIPMENTS - SS',
      ),
      3236 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011012 - POS Offline',
        'Revenue Name' => 'SALE OF CONDEMNED FURNITURE AND EQUIPMENTS  -  SS - POS OFFLINE',
      ),
      3237 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011012 - POS Online',
        'Revenue Name' => 'SALE OF CONDEM FURNITURE AND EQUI  -  SS - POS ONLINE',
      ),
      3238 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011013',
        'Revenue Name' => 'SALE OF MGT JOURNAL - PUBLIC SERVICE LECTURES',
      ),
      3239 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011013 - POS Offline',
        'Revenue Name' => 'SALE OF MGT JOURNAL  -  PUBLIC SERVICE LECTURES - POS OFFLINE',
      ),
      3240 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011013 - POS Online',
        'Revenue Name' => 'SALE OF MGT JOURNAL  -  PUB SER LECTURES - POS ONLINE',
      ),
      3241 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011014',
        'Revenue Name' => 'LAMINATION OF IDENTITY CARDS',
      ),
      3242 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011014 - POS Offline',
        'Revenue Name' => 'LAMINATION OF IDENTITY CARDS - POS OFFLINE',
      ),
      3243 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011014 - POS Online',
        'Revenue Name' => 'LAMINATION OF IDENTITY CARDS - POS ONLINE',
      ),
      3244 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011015',
        'Revenue Name' => 'SALE OF STATES IDENTIFICATION CERTS',
      ),
      3245 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011015 - POS Offline',
        'Revenue Name' => 'SALE OF STATES IDENTIFICATION CERTS - POS OFFLINE',
      ),
      3246 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011015 - POS Online',
        'Revenue Name' => 'SALE OF STATES IDENTIFICATION CERTS - POS ONLINE',
      ),
      3247 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011016',
        'Revenue Name' => 'SALE OF PILGRIMS APPLICATION FORMS',
      ),
      3248 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011016 - POS Offline',
        'Revenue Name' => 'SALE OF PILGRIMS APPLICATION FORMS - POS OFFLINE',
      ),
      3249 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011016 - POS Online',
        'Revenue Name' => 'SALE OF PILGRIMS APPLICATION FORMS - POS ONLINE',
      ),
      3250 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011017',
        'Revenue Name' => 'TENDER FEES',
      ),
      3251 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011017 - POS Offline',
        'Revenue Name' => 'TENDER FEES - POS OFFLINE',
      ),
      3252 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011017 - POS Online',
        'Revenue Name' => 'TENDER FEES - POS ONLINE',
      ),
      3253 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011018',
        'Revenue Name' => 'OATH FEES',
      ),
      3254 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011018 - POS Offline',
        'Revenue Name' => 'OATH FEES - POS OFFLINE',
      ),
      3255 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011018 - POS Online',
        'Revenue Name' => 'OATH FEES - POS ONLINE',
      ),
      3256 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011019',
        'Revenue Name' => 'HIRE OF STAFF CANTEEN BUILDINGS',
      ),
      3257 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011019 - POS Offline',
        'Revenue Name' => 'HIRE OF STAFF CANTEEN BUILDINGS - POS OFFLINE',
      ),
      3258 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011019 - POS Online',
        'Revenue Name' => 'HIRE OF STAFF CANTEEN BUILDINGS - POS ONLINE',
      ),
      3259 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011020',
        'Revenue Name' => 'OTHERS',
      ),
      3260 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011020 - POS Offline',
        'Revenue Name' => 'OTHERS - POS OFFLINE',
      ),
      3261 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011020 - POS Online',
        'Revenue Name' => 'OTHERS - POS ONLINE',
      ),
      3262 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011021',
        'Revenue Name' => 'CERTIFICATE OF STATE OF ORIGIN',
      ),
      3263 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011022',
        'Revenue Name' => '10% WHT ON CONSULTANTS',
      ),
      3264 => 
      array (
        'Category Code' => '11002001',
        'Category Name' => 'OFFICE OF THE SECRETARY TO THE STATE GOVERNOR (SSG',
        'Revenue Code' => '11002001-12011023',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      3265 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001001',
        'Revenue Name' => 'SPECIAL TAX FORCE',
      ),
      3266 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001001 - POS Offline',
        'Revenue Name' => 'SPECIAL TAX FORCE - POS OFFLINE',
      ),
      3267 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001001 - POS Online',
        'Revenue Name' => 'SPECIAL TAX FORCE - POS ONLINE',
      ),
      3268 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001002',
        'Revenue Name' => 'CHARTING FEE',
      ),
      3269 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001002 - POS Offline',
        'Revenue Name' => 'CHARTING FEE - POS OFFLINE',
      ),
      3270 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001002 - POS Online',
        'Revenue Name' => 'CHARTING FEE - POS ONLINE',
      ),
      3271 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001003',
        'Revenue Name' => 'SURVEY SERVICES',
      ),
      3272 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001003 - POS Offline',
        'Revenue Name' => 'SURVEY SERVICES - POS OFFLINE',
      ),
      3273 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001003 - POS Online',
        'Revenue Name' => 'SURVEY SERVICES - POS ONLINE',
      ),
      3274 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001004',
        'Revenue Name' => 'FENCING PERMIT',
      ),
      3275 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001004 - POS Offline',
        'Revenue Name' => 'FENCING PERMIT - POS OFFLINE',
      ),
      3276 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001004 - POS Online',
        'Revenue Name' => 'FENCING PERMIT - POS ONLINE',
      ),
      3277 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001005',
        'Revenue Name' => 'REGISTRATION FEE',
      ),
      3278 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001005 - POS Offline',
        'Revenue Name' => 'REGISTRATION FEE - POS OFFLINE',
      ),
      3279 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001005 - POS Online',
        'Revenue Name' => 'REGISTRATION FEE - POS ONLINE',
      ),
      3280 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001006',
        'Revenue Name' => 'SITE ANALYSIS REPORT (S.A.R)',
      ),
      3281 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001006 - POS Offline',
        'Revenue Name' => 'SITE ANALYSIS REPORT (S.A.R) - POS OFFLINE',
      ),
      3282 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001006 - POS Online',
        'Revenue Name' => 'SITE ANALYSIS REPORT (S.A.R) - POS ONLINE',
      ),
      3283 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001007',
        'Revenue Name' => 'INSPECTION FEE',
      ),
      3284 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001007 - POS Offline',
        'Revenue Name' => 'INSPECTION FEE - POS OFFLINE',
      ),
      3285 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001007 - POS Online',
        'Revenue Name' => 'INSPECTION FEE - POS ONLINE',
      ),
      3286 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001008',
        'Revenue Name' => 'PLAN PREPARATION FEE',
      ),
      3287 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001008 - POS Offline',
        'Revenue Name' => 'PLAN PREPARATION FEE - POS OFFLINE',
      ),
      3288 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001008 - POS Online',
        'Revenue Name' => 'PLAN PREPARATION FEE - POS ONLINE',
      ),
      3289 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001009',
        'Revenue Name' => 'DEBT RECOVERY',
      ),
      3290 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001009 - POS Offline',
        'Revenue Name' => 'DEBT RECOVERY - POS OFFLINE',
      ),
      3291 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001009 - POS Online',
        'Revenue Name' => 'DEBT RECOVERY - POS ONLINE',
      ),
      3292 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001010',
        'Revenue Name' => 'ENVIRONMENTAL IMPACT ANALYSIS REPORT (E.I.A.R)',
      ),
      3293 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001010 - POS Offline',
        'Revenue Name' => 'ENVIRONMENTAL IMPACT ANALYSIS REPORT (E.I.A.R) - POS OFFLINE',
      ),
      3294 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001010 - POS Online',
        'Revenue Name' => 'ENVIRONMENTAL IMPACT ANALYSIS REPORT (E.I.A.R) - POS ONLINE',
      ),
      3295 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001011',
        'Revenue Name' => 'DEVELOPMENT RATE',
      ),
      3296 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001011 - POS Offline',
        'Revenue Name' => 'DEVELOPMENT RATE - POS OFFLINE',
      ),
      3297 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001011 - POS Online',
        'Revenue Name' => 'DEVELOPMENT RATE - POS ONLINE',
      ),
      3298 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001012',
        'Revenue Name' => 'CERTIFICATE OF FITNESS',
      ),
      3299 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001012 - POS Offline',
        'Revenue Name' => 'CERTIFICATE OF FITNESS - POS OFFLINE',
      ),
      3300 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001012 - POS Online',
        'Revenue Name' => 'CERTIFICATE OF FITNESS - POS ONLINE',
      ),
      3301 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001013',
        'Revenue Name' => 'MISCELLANEOUS',
      ),
      3302 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001013 - POS Offline',
        'Revenue Name' => 'MISCELLANEOUS - POS OFFLINE',
      ),
      3303 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001013 - POS Online',
        'Revenue Name' => 'MISCELLANEOUS - POS ONLINE',
      ),
      3304 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001014',
        'Revenue Name' => 'CITY GUIDE',
      ),
      3305 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001014 - POS Offline',
        'Revenue Name' => 'CITY GUIDE - POS OFFLINE',
      ),
      3306 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001014 - POS Online',
        'Revenue Name' => 'CITY GUIDE - POS ONLINE',
      ),
      3307 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001015',
        'Revenue Name' => 'CONTRAVENTION',
      ),
      3308 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001015 - POS Offline',
        'Revenue Name' => 'CONTRAVENTION - POS OFFLINE',
      ),
      3309 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001015 - POS Online',
        'Revenue Name' => 'CONTRAVENTION - POS ONLINE',
      ),
      3310 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001016',
        'Revenue Name' => 'PLAN REGISTRATION',
      ),
      3311 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001016 - POS Offline',
        'Revenue Name' => 'PLAN REGISTRATION - POS OFFLINE',
      ),
      3312 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001016 - POS Online',
        'Revenue Name' => 'PLAN REGISTRATION - POS ONLINE',
      ),
      3313 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001017',
        'Revenue Name' => 'PLANNING RATE DEPOSTE OR APPROVAL FEE',
      ),
      3314 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001017 - POS Offline',
        'Revenue Name' => 'PLANNING RATE DEPOSTE OR APPROVAL FEE - POS OFFLINE',
      ),
      3315 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001017 - POS Online',
        'Revenue Name' => 'PLANNING RATE DEPOSTE OR APPROVAL FEE - POS ONLINE',
      ),
      3316 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001018',
        'Revenue Name' => 'RENOVATION (AMENDMENT)',
      ),
      3317 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001018 - POS Offline',
        'Revenue Name' => 'RENOVATION (AMENDMENT) - POS OFFLINE',
      ),
      3318 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001018 - POS Online',
        'Revenue Name' => 'RENOVATION (AMENDMENT) - POS ONLINE',
      ),
      3319 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001019',
        'Revenue Name' => 'TENDERS FEES',
      ),
      3320 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001019 - POS Offline',
        'Revenue Name' => 'TENDERS FEES - POS OFFLINE',
      ),
      3321 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001019 - POS Online',
        'Revenue Name' => 'TENDERS FEES - POS ONLINE',
      ),
      3322 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001020',
        'Revenue Name' => 'BASED STATION FOR TELECOM(MASTS)',
      ),
      3323 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001020 - POS Offline',
        'Revenue Name' => 'BASED STATION FOR TELECOM(MASTS) - POS OFFLINE',
      ),
      3324 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001020 - POS Online',
        'Revenue Name' => 'BASED STATION FOR TELECOM(MASTS) - POS ONLINE',
      ),
      3325 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001021',
        'Revenue Name' => 'VARIATION/ CHANGE OF USE',
      ),
      3326 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001021 - POS Offline',
        'Revenue Name' => 'VARIATION/ CHANGE OF USE - POS OFFLINE',
      ),
      3327 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001021 - POS Online',
        'Revenue Name' => 'VARIATION/ CHANGE OF USE - POS ONLINE',
      ),
      3328 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001022',
        'Revenue Name' => 'MOUNTING OF BILL BOARDS AND POSTS',
      ),
      3329 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001022 - POS Offline',
        'Revenue Name' => 'MOUNTING OF BILL BOARDS AND POSTS - POS OFFLINE',
      ),
      3330 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001022 - POS Online',
        'Revenue Name' => 'MOUNTING OF BILL BOARDS AND POSTS - POS ONLINE',
      ),
      3331 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001023',
        'Revenue Name' => 'PUBLIC RIGHT OF WAY',
      ),
      3332 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001023 - POS Offline',
        'Revenue Name' => 'PUBLIC RIGHT OF WAY - POS OFFLINE',
      ),
      3333 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001023 - POS Online',
        'Revenue Name' => 'PUBLIC RIGHT OF WAY - POS ONLINE',
      ),
      3334 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001024',
        'Revenue Name' => 'MISCELLENEOUS INCOMES',
      ),
      3335 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001024 - POS Offline',
        'Revenue Name' => 'MISCELLENEOUS INCOMES - POS OFFLINE',
      ),
      3336 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001024 - POS Online',
        'Revenue Name' => 'MISCELLENEOUS INCOMES - POS ONLINE',
      ),
      3337 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001025',
        'Revenue Name' => 'HIRE OF HEAVY EQUIPMENTS AND VEHICLES',
      ),
      3338 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001025 - POS Offline',
        'Revenue Name' => 'HIRE OF HEAVY EQUIPMENTS AND VEHICLES - POS OFFLINE',
      ),
      3339 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001025 - POS Online',
        'Revenue Name' => 'HIRE OF HEAVY EQUIPMENTS AND VEHICLES - POS ONLINE',
      ),
      3340 => 
      array (
        'Category Code' => '36001001',
        'Category Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA)',
        'Revenue Code' => '36001001-14001026',
        'Revenue Name' => 'OWERRI CAPITAL DEVELOPMENT AUTHORITY (OCDA) - ADOPTION FEES',
      ),
      3341 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101001',
        'Revenue Name' => '5% WHT ON CONTRACTS',
      ),
      3342 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101001 - POS Offline',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS OFFLINE',
      ),
      3343 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101001 - POS Online',
        'Revenue Name' => '5% WHT ON CONTRACTS - POS ONLINE',
      ),
      3344 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101002',
        'Revenue Name' => 'CASINO LICENCES',
      ),
      3345 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101002 - POS Offline',
        'Revenue Name' => 'CASINO LICENCES - POS OFFLINE',
      ),
      3346 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101002 - POS Online',
        'Revenue Name' => 'CASINO LICENCES - POS ONLINE',
      ),
      3347 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101003',
        'Revenue Name' => 'CASINO TAX',
      ),
      3348 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101003 - POS Offline',
        'Revenue Name' => 'CASINO TAX - POS OFFLINE',
      ),
      3349 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101003 - POS Online',
        'Revenue Name' => 'CASINO TAX - POS ONLINE',
      ),
      3350 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101004',
        'Revenue Name' => 'GAMES LICENCES',
      ),
      3351 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101004 - POS Offline',
        'Revenue Name' => 'GAMES LICENCES - POS OFFLINE',
      ),
      3352 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101004 - POS Online',
        'Revenue Name' => 'GAMES LICENCES - POS ONLINE',
      ),
      3353 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101005',
        'Revenue Name' => 'HAWKERS PERMIT LICENCES-',
      ),
      3354 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101005 - POS Offline',
        'Revenue Name' => 'HAWKERS PERMIT LICENCES - POS OFFLINE',
      ),
      3355 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101005 - POS Online',
        'Revenue Name' => 'HAWKERS PERMIT LICENCES - POS ONLINE',
      ),
      3356 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101006',
        'Revenue Name' => 'LATE PAYMENT FINE',
      ),
      3357 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101006 - POS Offline',
        'Revenue Name' => 'LATE PAYMENT FINE - POS OFFLINE',
      ),
      3358 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101006 - POS Online',
        'Revenue Name' => 'LATE PAYMENT FINE - POS ONLINE',
      ),
      3359 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101007',
        'Revenue Name' => 'LOTTERY COMMISSION',
      ),
      3360 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101007 - POS Offline',
        'Revenue Name' => 'LOTTERY COMMISSION - POS OFFLINE',
      ),
      3361 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101007 - POS Online',
        'Revenue Name' => 'LOTTERY COMMISSION - POS ONLINE',
      ),
      3362 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101008',
        'Revenue Name' => 'LOTTERY LICENCES',
      ),
      3363 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101008 - POS Offline',
        'Revenue Name' => 'LOTTERY LICENCES - POS OFFLINE',
      ),
      3364 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101008 - POS Online',
        'Revenue Name' => 'LOTTERY LICENCES - POS ONLINE',
      ),
      3365 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101009',
        'Revenue Name' => 'POOL JOURNAL LICENCES',
      ),
      3366 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101009 - POS Offline',
        'Revenue Name' => 'POOL JOURNAL LICENCES - POS OFFLINE',
      ),
      3367 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101009 - POS Online',
        'Revenue Name' => 'POOL JOURNAL LICENCES - POS ONLINE',
      ),
      3368 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101010',
        'Revenue Name' => 'POOLS AGENTS LICENCES',
      ),
      3369 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101010 - POS Offline',
        'Revenue Name' => 'POOLS AGENTS LICENCES - POS OFFLINE',
      ),
      3370 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101010 - POS Online',
        'Revenue Name' => 'POOLS AGENTS LICENCES - POS ONLINE',
      ),
      3371 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101011',
        'Revenue Name' => 'POOLS BETTING TAX',
      ),
      3372 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101011 - POS Offline',
        'Revenue Name' => 'POOLS BETTING TAX - POS OFFLINE',
      ),
      3373 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101011 - POS Online',
        'Revenue Name' => 'POOLS BETTING TAX - POS ONLINE',
      ),
      3374 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101012',
        'Revenue Name' => 'POOLS PROMOTER LICENCES',
      ),
      3375 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101012 - POS Offline',
        'Revenue Name' => 'POOLS PROMOTER LICENCES - POS OFFLINE',
      ),
      3376 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101012 - POS Online',
        'Revenue Name' => 'POOLS PROMOTER LICENCES - POS ONLINE',
      ),
      3377 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101013',
        'Revenue Name' => 'SALE OF FORM FOR BUSINESS PROMOTION',
      ),
      3378 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101013 - POS Offline',
        'Revenue Name' => 'SALE OF FORM FOR BUSINESS PROMOTION - POS OFFLINE',
      ),
      3379 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101013 - POS Online',
        'Revenue Name' => 'SALE OF FORM FOR BUSINESS PROMOTION - POS ONLINE',
      ),
      3380 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101014',
        'Revenue Name' => 'SALE OF FORM FOR POOLS JOURNAL',
      ),
      3381 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101014 - POS Offline',
        'Revenue Name' => 'SALE OF FORM FOR POOLS JOURNAL - POS OFFLINE',
      ),
      3382 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101014 - POS Online',
        'Revenue Name' => 'SALE OF FORM FOR POOLS JOURNAL - POS ONLINE',
      ),
      3383 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101015',
        'Revenue Name' => 'SALE OF FORMS FOR BUSINESS JOURNAL',
      ),
      3384 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101015 - POS Offline',
        'Revenue Name' => 'SALE OF FORMS FOR BUSINESS JOURNAL - POS OFFLINE',
      ),
      3385 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101015 - POS Online',
        'Revenue Name' => 'SALE OF FORMS FOR BUSINESS JOURNAL - POS ONLINE',
      ),
      3386 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101016',
        'Revenue Name' => 'SALE OF FORMS FOR LOTTERY',
      ),
      3387 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101016 - POS Offline',
        'Revenue Name' => 'SALE OF FORMS FOR LOTTERY - POS OFFLINE',
      ),
      3388 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101016 - POS Online',
        'Revenue Name' => 'SALE OF FORMS FOR LOTTERY - POS ONLINE',
      ),
      3389 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101017',
        'Revenue Name' => 'SALE OF FORMS FOR POOLS AGENTS',
      ),
      3390 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101017 - POS Offline',
        'Revenue Name' => 'SALE OF FORMS FOR POOLS AGENTS - POS OFFLINE',
      ),
      3391 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101017 - POS Online',
        'Revenue Name' => 'SALE OF FORMS FOR POOLS AGENTS - POS ONLINE',
      ),
      3392 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101018',
        'Revenue Name' => 'SALE OF FORMS FOR PREMISES',
      ),
      3393 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101018 - POS Offline',
        'Revenue Name' => 'SALE OF FORMS FOR PREMISES - POS OFFLINE',
      ),
      3394 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101018 - POS Online',
        'Revenue Name' => 'SALE OF FORMS FOR PREMISES - POS ONLINE',
      ),
      3395 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101019',
        'Revenue Name' => 'SALE OF FORMS FOR PROMOTERS',
      ),
      3396 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101019 - POS Offline',
        'Revenue Name' => 'SALE OF FORMS FOR PROMOTERS - POS OFFLINE',
      ),
      3397 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101019 - POS Online',
        'Revenue Name' => 'SALE OF FORMS FOR PROMOTERS - POS ONLINE',
      ),
      3398 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101020',
        'Revenue Name' => 'SALE OF FORMS FOR SLOTTING MACHINE',
      ),
      3399 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101020 - POS Offline',
        'Revenue Name' => 'SALE OF FORMS FOR SLOTTING MACHINE - POS OFFLINE',
      ),
      3400 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101020 - POS Online',
        'Revenue Name' => 'SALE OF FORMS FOR SLOTTING MACHINE - POS ONLINE',
      ),
      3401 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101021',
        'Revenue Name' => 'SALES OF FORMS FOR LOTTERY',
      ),
      3402 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101021 - POS Offline',
        'Revenue Name' => 'SALES OF FORMS FOR LOTTERY - POS OFFLINE',
      ),
      3403 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101021 - POS Online',
        'Revenue Name' => 'SALES OF FORMS FOR LOTTERY - POS ONLINE',
      ),
      3404 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101022',
        'Revenue Name' => 'SLOT MACHINE',
      ),
      3405 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101022 - POS Offline',
        'Revenue Name' => 'SLOT MACHINE - POS OFFLINE',
      ),
      3406 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101022 - POS Online',
        'Revenue Name' => 'SLOT MACHINE - POS ONLINE',
      ),
      3407 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101023',
        'Revenue Name' => 'WEEKLY POOL TAX',
      ),
      3408 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101023 - POS Offline',
        'Revenue Name' => 'WEEKLY POOL TAX - POS OFFLINE',
      ),
      3409 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101023 - POS Online',
        'Revenue Name' => 'WEEKLY POOL TAX - POS ONLINE',
      ),
      3410 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101024',
        'Revenue Name' => 'Application Fee',
      ),
      3411 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101025',
        'Revenue Name' => 'Operating Permit/License Fee',
      ),
      3412 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101026',
        'Revenue Name' => 'Renewal of Operating Permit/License Fee',
      ),
      3413 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101027',
        'Revenue Name' => 'Agent Lottery Outlet Permit Fee',
      ),
      3414 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101028',
        'Revenue Name' => 'Agent Lottery Outlet Renewal Fee',
      ),
      3415 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101029',
        'Revenue Name' => 'Gaming Tax Fee',
      ),
      3416 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101030',
        'Revenue Name' => 'Gaming Test Lab Fee',
      ),
      3417 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101031',
        'Revenue Name' => 'Sanctions and Contravention Fee',
      ),
      3418 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101032',
        'Revenue Name' => 'WHT on Winning Tickets',
      ),
      3419 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101033',
        'Revenue Name' => 'Staff Income Tax',
      ),
      3420 => 
      array (
        'Category Code' => '27001001',
        'Category Name' => 'POOLS, BETTING AND GAMING BOARD',
        'Revenue Code' => '27001001-13101034',
        'Revenue Name' => 'Other Fees',
      ),
    );
    // return ImoMda::all();
    foreach($arrays as $key => $array){
      if(($key > 0) && (strlen($array["Revenue Code"]) < 19 ) ){
       
        // $mda_id = ImoMda::where('default_itemcode',$array[0])->first()->id;
        // $query = ImoMda::where('default_itemcode',$array["Category Code"])->first();
        // if($query){
        //   $mda_id = $query->id;
        // }else{
        //   $mda_id = "not found";
        // }
        $mda_id = ImoMda::where('default_itemcode',$array["Category Code"])->first()->id;
        // echo $key."    ".$array["Revenue Code"]."   ".$mda_id;
        // echo "<br/>";
        
        ImoService::create([
          'mda_id' => $mda_id,
          'item_code' => $array["Revenue Code"],
          'name' => $array["Revenue Name"]
        ]);
      }
    }

  }
   
}
