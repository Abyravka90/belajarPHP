<?php

function pengenalanDiri($nama)
{
    return 'hello nama saya' . $nama;
}

function namaSaya()
{
    return 'Elna Fitria';
}
echo namaSaya();

echo pengenalanDiri('Elna Fitria'); // argument
echo pengenalanDiri('Amrulloh');//call the function
