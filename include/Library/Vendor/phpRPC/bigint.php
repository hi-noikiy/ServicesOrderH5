<?php

/**********************************************************\

|                                                          |

| The implementation of PHPRPC Protocol 3.0                |

|                                                          |

| bigint.php                                               |

|                                                          |

| Release 3.0.1                                            |

| Copyright by Team-PHPRPC                                 |

|                                                          |

| WebSite:  http://www.phprpc.org/                         |

|           http://www.phprpc.net/                         |

|           http://www.phprpc.com/                         |

|           http://sourceforge.net/projects/php-rpc/       |

|                                                          |

| Authors:  Ma Bingyao <andot@ujn.edu.cn>                  |

|                                                          |

| This file may be distributed and/or modified under the   |

| terms of the GNU General Public License (GPL) version    |

| 2.0 as published by the Free Software Foundation and     |

| appearing in the included file LICENSE.                  |

|                                                          |

\**********************************************************/



/* Big integer expansion library.

 *

 * Copyright: Ma Bingyao <andot@ujn.edu.cn>

 *            mgccl <mgcclx@gmail.com>

 * Version: 3.0.1

 * LastModified: Apr 12, 2010

 * This library is free.  You can redistribute it and/or modify it under GPL.

 */



if (extension_loaded('gmp')) {

    function bigint_dec2num($dec) {

        return gmp_init($dec);

    }

    function bigint_num2dec($num) {

        return gmp_strval($num);

    }

    function bigint_str2num($str) {

        return gmp_init("0x".bin2hex($str));

    }

    function bigint_num2str($num) {

        $str = gmp_strval($num, 16);

        $len = strlen($str);

        if ($len % 2 == 1) {

            $str = '0'.$str;

        }

        return pack("H*", $str);

    }

    function bigint_random($n, $s) {

        $result = gmp_init(0);

        for ($i = 0; $i < $n; $i++) {

            if (mt_rand(0, 1)) {

                gmp_setbit($result, $i);

            }

        }

        if ($s) {

            gmp_setbit($result, $n - 1);

        }

        return $result;

    }

    function bigint_powmod($x, $y, $m) {

        return gmp_powm($x, $y, $m);

    }

}

else if (extension_loaded('big_int')) {

    function bigint_dec2num($dec) {

        return bi_from_str($dec);

    }

    function bigint_num2dec($num) {

        return bi_to_str($num);

    }

    function bigint_str2num($str) {

        return bi_from_str(bin2hex($str), 16);

    }

    function bigint_num2str($num) {

        $str = bi_to_str($num, 16);

        $len = strlen($str);

        if ($len % 2 == 1) {

            $str = '0'.$str;

        }

        return pack("H*", $str);

    }

    function bigint_random($n, $s) {

        $result = bi_rand($n);

        if ($s) {

            $result = bi_set_bit($result, $n - 1);

        }

        return $result;

    }

    function bigint_powmod($x, $y, $m) {

        return bi_powmod($x, $y, $m);

    }

}

else if (extension_loaded('bcmath')) {

    function bigint_dec2num($dec) {

        return $dec;

    }

    function bigint_num2dec($num) {

        return $num;

    }

    function bigint_str2num($str) {

        bcscale(0);

        $len = strlen($str);

        $result = '0';

        $m = '1';

        for ($i = 0; $i < $len; $i++) {

            $result = bcadd(bcmul($m, ord($str{$len - $i - 1})), $result);

            $m = bcmul($m, '256');

        }

        return $result;

    }

    function bigint_num2str($num) {

        bcscale(0);

        $str = "";

        while (bccomp($num, '0') == 1) {

           $str = chr(bcmod($num, '256')) . $str;

           $num = bcdiv($num, '256');

        }

        return $str;

    }

    // author of bcmath bigint_random: mgccl <mgcclx@gmail.com>

    function bigint_pow($b, $e) {

        if ($b == 2) {

            $a[96] = '79228162514264337593543950336';

            $a[128] = '340282366920938463463374607431768211456';

            $a[160] = '1461501637330902918203684832716283019655932542976';

            $a[192] = '6277101735386680763835789423207666416102355444464034512896';

            $a[256] = '115792089237316195423570985008687907853269984665640564039457584007913129639936';

            $a[512] = '13407807929942597099574024998205846127479365820592393377723561443721764030073546976801874298166903427690031858186486050853753882811946569946433649006084096';

            $a[768] = '1552518092300708935148979488462502555256886017116696611139052038026050952686376886330878408828646477950487730697131073206171580044114814391444287275041181139204454976020849905550265285631598444825262999193716468750892846853816057856';

            $a[1024] = '179769313486231590772930519078902473361797697894230657273430081157732675805500963132708477322407536021120113879871393357658789768814416622492847430639474124377767893424865485276302219601246094119453082952085005768838150682342462881473913110540827237163350510684586298239947245938479716304835356329624224137216';

            $a[1356] = '1572802244866018108182967249994981337399178505432223228293716677435703277129801955281491139254988030713172834803458459525011536776047399098682525970017006610187370020027540826048617586909475175880278263391147764612823746132583281588112028234096933800670620569966257212339315820309710495898777306979706509398705741430192541287726011814541176060679505247297118998085067003005943214893171428950699778511718055936';

            $a[2048] = '32317006071311007300714876688669951960444102669715484032130345427524655138867890893197201411522913463688717960921898019494119559150490921095088152386448283120630877367300996091750197750389652106796057638384067568276792218642619756161838094338476170470581645852036305042887575891541065808607552399123930385521914333389668342420684974786564569494856176035326322058077805659331026192708460314150258592864177116725943603718461857357598351152301645904403697613233287231227125684710820209725157101726931323469678542580656697935045997268352998638215525166389437335543602135433229604645318478604952148193555853611059596230656';

            $a[3072] = '5809605995369958062859502533304574370686975176362895236661486152287203730997110225737336044533118407251326157754980517443990529594540047121662885672187032401032111639706440498844049850989051627200244765807041812394729680540024104827976584369381522292361208779044769892743225751738076979568811309579125511333093243519553784816306381580161860200247492568448150242515304449577187604136428738580990172551573934146255830366405915000869643732053218566832545291107903722831634138599586406690325959725187447169059540805012310209639011750748760017095360734234945757416272994856013308616958529958304677637019181594088528345061285863898271763457294883546638879554311615446446330199254382340016292057090751175533888161918987295591531536698701292267685465517437915790823154844634780260102891718032495396075041899485513811126977307478969074857043710716150121315922024556759241239013152919710956468406379442914941614357107914462567329693696';

            $a[4096] = '1044388881413152506691752710716624382579964249047383780384233483283953907971557456848826811934997558340890106714439262837987573438185793607263236087851365277945956976543709998340361590134383718314428070011855946226376318839397712745672334684344586617496807908705803704071284048740118609114467977783598029006686938976881787785946905630190260940599579453432823469303026696443059025015972399867714215541693835559885291486318237914434496734087811872639496475100189041349008417061675093668333850551032972088269550769983616369411933015213796825837188091833656751221318492846368125550225998300412344784862595674492194617023806505913245610825731835380087608622102834270197698202313169017678006675195485079921636419370285375124784014907159135459982790513399611551794271106831134090584272884279791554849782954323534517065223269061394905987693002122963395687782878948440616007412945674919823050571642377154816321380631045902916136926708342856440730447899971901781465763473223850267253059899795996090799469201774624817718449867455659250178329070473119433165550807568221846571746373296884912819520317457002440926616910874148385078411929804522981857338977648103126085903001302413467189726673216491511131602920781738033436090243804708340403154190336';

            $a[8192] = '1090748135619415929462984244733782862448264161996232692431832786189721331849119295216264234525201987223957291796157025273109870820177184063610979765077554799078906298842192989538609825228048205159696851613591638196771886542609324560121290553901886301017900252535799917200010079600026535836800905297805880952350501630195475653911005312364560014847426035293551245843928918752768696279344088055617515694349945406677825140814900616105920256438504578013326493565836047242407382442812245131517757519164899226365743722432277368075027627883045206501792761700945699168497257879683851737049996900961120515655050115561271491492515342105748966629547032786321505730828430221664970324396138635251626409516168005427623435996308921691446181187406395310665404885739434832877428167407495370993511868756359970390117021823616749458620969857006263612082706715408157066575137281027022310927564910276759160520878304632411049364568754920967322982459184763427383790272448438018526977764941072715611580434690827459339991961414242741410599117426060556483763756314527611362658628383368621157993638020878537675545336789915694234433955666315070087213535470255670312004130725495834508357439653828936077080978550578912967907352780054935621561090795845172954115972927479877527738560008204118558930004777748727761853813510493840581861598652211605960308356405941821189714037868726219481498727603653616298856174822413033485438785324024751419417183012281078209729303537372804574372095228703622776363945290869806258422355148507571039619387449629866808188769662815778153079393179093143648340761738581819563002994422790754955061288818308430079648693232179158765918035565216157115402992120276155607873107937477466841528362987708699450152031231862594203085693838944657061346236704234026821102958954951197087076546186622796294536451620756509351018906023773821539532776208676978589731966330308893304665169436185078350641568336944530051437491311298834367265238595404904273455928723949525227184617404367854754610474377019768025576605881038077270707717942221977090385438585844095492116099852538903974655703943973086090930596963360767529964938414598185705963754561497355827813623833288906309004288017321424808663962671333528009232758350873059614118723781422101460198615747386855096896089189180441339558524822867541113212638793675567650340362970031930023397828465318547238244232028015189689660418822976000815437610652254270163595650875433851147123214227266605403581781469090806576468950587661997186505665475715792896';

            return (isset($a[$e]) ? $a[$e] : bcpow(2, $e));

        }

        return bcpow($b, $e);

    }

    function bigint_random($n, $s) {

        bcscale(0);

        $t = bigint_pow(2, $n);

        if ($s == 1) {

            $m = bcdiv($t, 2);

            $t = bcsub($m, 1);

        }

        else {

            $m = 0;

            $t = bcsub($t, 1);

        }

        $l = strlen($t);

        $n = (int) ($l / 9) + 1;

        $r = '';

        while($n) {

            $r .= substr('000000000' . mt_rand(0, 999999999), -9);

            --$n;

        }

        $r = substr($r, 0, $l);

        while (bccomp($r, $t) == 1) $r = substr($r, 1, $l) . mt_rand(0, 9);

        return bcadd($r, $m);

    }

    if (!function_exists('bcpowmod')) {

        function bcpowmod($x, $y, $modulus, $scale = 0) {

            $t = '1';

            while (bccomp($y, '0')) {

                if (bccomp(bcmod($y, '2'), '0')) {

                    $t = bcmod(bcmul($t, $x), $modulus);

                    $y = bcsub($y, '1');

                }



                $x = bcmod(bcmul($x, $x), $modulus);

                $y = bcdiv($y, '2');

            }

            return $t;

        }

    }

    function bigint_powmod($x, $y, $m) {

        return bcpowmod($x, $y, $m);

    }

}

else {

    function bigint_mul($a, $b) {

        $n = count($a);

        $m = count($b);

        $nm = $n + $m;

        $c = array_fill(0, $nm, 0);

        for ($i = 0; $i < $n; $i++) {

            for ($j = 0; $j < $m; $j++) {

                $c[$i + $j] += $a[$i] * $b[$j];

                $c[$i + $j + 1] += ($c[$i + $j] >> 15) & 0x7fff;

                $c[$i + $j] &= 0x7fff;

            }

        }

        return $c;

    }

    function bigint_div($a, $b, $is_mod = 0) {

        $n = count($a);

        $m = count($b);

        $c = array();

        $d = floor(0x8000 / ($b[$m - 1] + 1));

        $a = bigint_mul($a, array($d));

        $b = bigint_mul($b, array($d));

        for ($j = $n - $m; $j >= 0; $j--) {

            $tmp = $a[$j + $m] * 0x8000 + $a[$j + $m - 1];

            $rr = $tmp % $b[$m - 1];

            $qq = round(($tmp - $rr) / $b[$m - 1]);

            if (($qq == 0x8000) || (($m > 1) && ($qq * $b[$m - 2] > 0x8000 * $rr + $a[$j + $m - 2]))) {

                $qq--;

                $rr += $b[$m - 1];

                if (($rr < 0x8000) && ($qq * $b[$m - 2] > 0x8000 * $rr + $a[$j + $m - 2])) $qq--;

            }

            for ($i = 0; $i < $m; $i++) {

                $tmp = $i + $j;

                $a[$tmp] -= $b[$i] * $qq;

                $a[$tmp + 1] += floor($a[$tmp] / 0x8000);

                $a[$tmp] &= 0x7fff;

            }

            $c[$j] = $qq;

            if ($a[$tmp + 1] < 0) {

                $c[$j]--;

                for ($i = 0; $i < $m; $i++) {

                    $tmp = $i + $j;

                    $a[$tmp] += $b[$i];

                    if ($a[$tmp] > 0x7fff) {

                        $a[$tmp + 1]++;

                        $a[$tmp] &= 0x7fff;

                    }

                }

            }

        }

        if (!$is_mod) return $c;

        $b = array();

        for ($i = 0; $i < $m; $i++) $b[$i] = $a[$i];

        return bigint_div($b, array($d));

    }

    function bigint_zerofill($str, $num) {

        return str_pad($str, $num, '0', STR_PAD_LEFT);

    }

    function bigint_dec2num($dec) {

        $n = strlen($dec);

        $a = array(0);

        $n += 4 - ($n % 4);

        $dec = bigint_zerofill($dec, $n);

        $n >>= 2;

        for ($i = 0; $i < $n; $i++) {

            $a = bigint_mul($a, array(10000));

            $a[0] += (int)substr($dec, 4 * $i, 4);

            $m = count($a);

            $j = 0;

            $a[$m] = 0;

            while ($j < $m && $a[$j] > 0x7fff) {

                $a[$j++] &= 0x7fff;

                $a[$j]++;

            }

            while ((count($a) > 1) && (!$a[count($a) - 1])) array_pop($a);

        }

        return $a;

    }

    function bigint_num2dec($num) {

        $n = count($num) << 1;

        $b = array();

        for ($i = 0; $i < $n; $i++) {

            $tmp = bigint_div($num, array(10000), 1);

            $b[$i] = bigint_zerofill($tmp[0], 4);

            $num = bigint_div($num, array(10000));

        }

        while ((count($b) > 1) && !(int)$b[count($b) - 1]) array_pop($b);

        $n = count($b) - 1;

        $b[$n] = (int)$b[$n];

        $b = join('', array_reverse($b));

        return $b;

    }

    function bigint_str2num($str) {

        $n = strlen($str);

        $n += 15 - ($n % 15);

        $str = str_pad($str, $n, chr(0), STR_PAD_LEFT);

        $j = 0;

        $result = array();

        for ($i = 0; $i < $n; $i++) {

            $result[$j++] = (ord($str{$i++}) << 7) | (ord($str{$i}) >> 1);

            $result[$j++] = ((ord($str{$i++}) & 0x01) << 14) | (ord($str{$i++}) << 6) | (ord($str{$i}) >> 2);

            $result[$j++] = ((ord($str{$i++}) & 0x03) << 13) | (ord($str{$i++}) << 5) | (ord($str{$i}) >> 3);

            $result[$j++] = ((ord($str{$i++}) & 0x07) << 12) | (ord($str{$i++}) << 4) | (ord($str{$i}) >> 4);

            $result[$j++] = ((ord($str{$i++}) & 0x0f) << 11) | (ord($str{$i++}) << 3) | (ord($str{$i}) >> 5);

            $result[$j++] = ((ord($str{$i++}) & 0x1f) << 10) | (ord($str{$i++}) << 2) | (ord($str{$i}) >> 6);

            $result[$j++] = ((ord($str{$i++}) & 0x3f) << 9) | (ord($str{$i++}) << 1) | (ord($str{$i}) >> 7);

            $result[$j++] = ((ord($str{$i++}) & 0x7f) << 8) | ord($str{$i});

        }

        $result = array_reverse($result);

        $i = count($result) - 1;

        while ($result[$i] == 0) {

            array_pop($result);

            $i--;

        }

        return $result;

    }

    function bigint_num2str($num) {

        ksort($num, SORT_NUMERIC);

        $n = count($num);

        $n += 8 - ($n % 8);

        $num = array_reverse(array_pad($num, $n, 0));

        $s = '';

        for ($i = 0; $i < $n; $i++) {

            $s .= chr($num[$i] >> 7);

            $s .= chr((($num[$i++] & 0x7f) << 1) | ($num[$i] >> 14));

            $s .= chr(($num[$i] >> 6) & 0xff);

            $s .= chr((($num[$i++] & 0x3f) << 2) | ($num[$i] >> 13));

            $s .= chr(($num[$i] >> 5) & 0xff);

            $s .= chr((($num[$i++] & 0x1f) << 3) | ($num[$i] >> 12));

            $s .= chr(($num[$i] >> 4) & 0xff);

            $s .= chr((($num[$i++] & 0x0f) << 4) | ($num[$i] >> 11));

            $s .= chr(($num[$i] >> 3) & 0xff);

            $s .= chr((($num[$i++] & 0x07) << 5) | ($num[$i] >> 10));

            $s .= chr(($num[$i] >> 2) & 0xff);

            $s .= chr((($num[$i++] & 0x03) << 6) | ($num[$i] >> 9));

            $s .= chr(($num[$i] >> 1) & 0xff);

            $s .= chr((($num[$i++] & 0x01) << 7) | ($num[$i] >> 8));

            $s .= chr($num[$i] & 0xff);

        }

        return ltrim($s, chr(0));

    }



    function bigint_random($n, $s) {

        $lowBitMasks = array(0x0000, 0x0001, 0x0003, 0x0007,

                             0x000f, 0x001f, 0x003f, 0x007f,

                             0x00ff, 0x01ff, 0x03ff, 0x07ff,

                             0x0fff, 0x1fff, 0x3fff);

        $r = $n % 15;

        $q = floor($n / 15);

        $result = array();

        for ($i = 0; $i < $q; $i++) {

            $result[$i] = mt_rand(0, 0x7fff);

        }

        if ($r != 0) {

            $result[$q] = mt_rand(0, $lowBitMasks[$r]);

            if ($s) {

                $result[$q] |= 1 << ($r - 1);

            }

        }

        else if ($s) {

            $result[$q - 1] |= 0x4000;

        }

        return $result;

    }

    function bigint_powmod($x, $y, $m) {

        $n = count($y);

        $p = array(1);

        for ($i = 0; $i < $n - 1; $i++) {

            $tmp = $y[$i];

            for ($j = 0; $j < 0xf; $j++) {

                if ($tmp & 1) $p = bigint_div(bigint_mul($p, $x), $m, 1);

                $tmp >>= 1;

                $x = bigint_div(bigint_mul($x, $x), $m, 1);

            }

        }

        $tmp = $y[$i];

        while ($tmp) {

            if ($tmp & 1) $p = bigint_div(bigint_mul($p, $x), $m, 1);

            $tmp >>= 1;

            $x = bigint_div(bigint_mul($x, $x), $m, 1);

        }

        return $p;

    }

}

?>