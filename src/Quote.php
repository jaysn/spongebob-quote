<?php

namespace SpongebobQuote;

class Quote
{
    private static $quotes = [
        "I'm ready, I'm ready.",
        "Look at all the hip young people eating sal-ads.",
        "The best time to wear a striped sweater is all the time.",
        "Can I be excused for the rest of my life?",
        "I'm ugly and I'm proud!",
        "F is for friends who do stuff together!",
        "All I know is fine dining and breathing.",
        "Ravioli, ravioli. Give me the formuoli.",
        "Krusty Krab Pizza, it's the pizza for you and meeeeee!",
        "If you believe in yourself, with a tiny pinch of magic all your dreams can come true!",
        "The inner machinations of my mind are an enigma.",
        "Is mayonnaise an instrument?",
        "Is this the Krusty Krab?",
        "I can't see my forehead!",
        "Once upon a time there was an ugly barnacle. He was so ugly that everyone died. The end!",
        "Two words, SpongeBob. Na. Chos.",
        "I wumbo, you wumbo, he she we wumbo.",
        "Wake me up when I care.",
        "I have no soul.",
        "It's just a cruel reminder that I'm single and likely to remain that way forever.",
        "Future!!!",
        "I knew I shouldn't have gotten out of bed today.",
        "But it's my only night to be fancy!",
        "I might as well sleep for 100 years or so.",
        "One hour later",
        "Two hours later",
        "Three hours later", 
        "Five hours later",
        "2000 years later",
        "One eternity later",
        "So much later that the old narrator got tired of waiting and they had to hire a new one.",
        "Did you smell it? That smell. A kind of smelly smell. The smelly smell that smells...smelly.",
        "Goodbye everyone, I'll remember you all in therapy.",
        "CHOCOLATEEEEEE!",
        "Hmmm, a five-letter word for happiness...money."
    ];

    public static function generate(): string
    {
        $key = array_rand(Quote::$quotes);
        return Quote::$quotes[$key];
    }
}