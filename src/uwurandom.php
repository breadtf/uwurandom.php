<?php

// 
// uwurandom.php
// uwurandom remade in php :3333
// uwurandom.php is licensed under MIT
// https://github.com/breadteleporter/uwurandom.php
// 

namespace Breadtf\Uwurandom;

class uwurandom
{

    const version = "1.1.0";

    public function uwu_nonsense($length)
    {
        $out = [];
        for ($x = 0; $x <= $length / 2; $x++) {
            $rand = mt_rand(0, sizeof($GLOBALS["nonsense"]) - 1);
            $out[] = $GLOBALS["nonsense"][$rand];
        }
        return str_replace(" ", "", implode(" ", $out));
    }

    public function uwu_nya($length)
    {
        return "ny" . str_repeat("a", $length);
    }

    public function uwu_blush($length)
    {
        return ">" . str_repeat("/", $length) . "<";
    }

    public function uwu_action($rand)
    {
        if ($rand == 12) {
            $rand = 11;
        }
        return $GLOBALS["actions"][$rand];
    }

    public function uwu_keysmash($length)
    {
        $out = [];
        for ($x = 0; $x <= $length; $x++) {
            $randomAsciiValue = rand(65, 90); // ASCII values for uppercase letters A-Z
            $randomLetter = chr($randomAsciiValue);
            $out[] = strtolower($randomLetter);
        }
        return str_replace(" ", "", implode(" ", $out));
    }

    public function uwu_scrunkly($length)
    {
        return "aw " . $this->uwu_keysmash($length - 3);
    }

    public function generate($maxlen, $softlimit=false)
    {

        $GLOBALS["actions"] = [
            "*tilts head*",
            "*twitches ears slightly*",
            "*purrs*",
            "*falls asleep*",
            "*sits on ur keyboard*",
            "*nuzzles*",
            "*stares at u*",
            "*points towards case of monster zero ultra*",
            "*sneezes*",
            "*plays with yarn*",
            "*eats all ur doritos*",
            "*lies down on a random surface*"
        ];
    
        $GLOBALS["nonsense"] = [
            "aa",
            "am",
            "an",
            "ao",
            "eo",
            "ew",
            "me",
            "mr",
            "ny",
            "ow",
            "pp",
            "pu",
            "ra",
            "re",
            "rm",
            "rn",
            "ro",
            "rp",
            "rw",
            "ur",
            "wm",
            "wn",
            "wp",
            "wr",
            "ww",
            "ya"
        ];

        // How many characters so far
        $currentlen = 0;

        // Output string
        $out = [];

        // Last selection
        $last = -1;

        while (true) {
            $random = mt_rand(0, 10);

            // Dont repeat the same thing twice
            if ($last == $random) {
                continue;
            }

            if ($random == 0) {
                $str = "uwu";
                $out[] = $str;
                $currentlen += strlen($str);
            } elseif ($random == 1) {
                // nonsense
                $str = $this->uwu_nonsense(mt_rand(5, 25));
                $out[] = $str;
                $currentlen += strlen($str);
            } elseif ($random == 2) {
                // nyaaa~
                $str = $this->uwu_nya(mt_rand(3, 6));
                $out[] = $str;
                $currentlen += strlen($str);
            } elseif ($random == 3) {
                // >///<
                $str = $this->uwu_blush(mt_rand(3, 5));
                $out[] = $str;
                $currentlen += strlen($str);
            } elseif ($random == 4) {
                // :3
                $str = ":3";
                $out[] = $str;
                $currentlen += strlen($str);
            } elseif ($random == 5) {
                // Actions
                $str = $this->uwu_action(mt_rand(0, sizeof($GLOBALS["actions"])));
                $out[] = $str;
                $currentlen += strlen($str);
            } elseif ($random == 6) {
                // Keysmash;
                $str = $this->uwu_keysmash(mt_rand(5, 25));
                $out[] = $str;
                $currentlen += strlen($str);
            } elseif ($random == 7) {
                // screaming
                $str = str_repeat("A", mt_rand(3, 5));
                $out[] = $str;
                $currentlen += strlen($str);
            } elseif ($random == 8) {
                // aww the scrunkly
                $str = $this->uwu_scrunkly(mt_rand(5, 25));
                $out[] = $str;
                $currentlen += strlen($str);
            } elseif ($random == 9) {
                // owo
                $out[] = "owo";
                $currentlen += strlen("owo");
            }
            if ($currentlen >= $maxlen) {
                break;
            }
            $last = $random;
        }

        if ($softlimit == false){
            return substr(implode(" ", $out), 0, $maxlen);
        } else {
            return implode(" ", $out);
        }
    }
}
