<?php

$score = 83;

if ($score >= 80 && $score <= 100)
{
    echo "Get A<br>";
}
elseif ($score >= 70 && $score <= 79)
{
    echo "Get B";
}
elseif ($score >= 60 && $score <= 69)
{
    echo "Get C<br>";
}
elseif ($score >= 50 && $score <= 59)
{
    echo "Get C<br>";
}
else
{
    echo "Get F<br>";
}
