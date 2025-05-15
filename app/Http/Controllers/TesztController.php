<?php


namespace App\Http\Controllers;


class TesztController
{
public function teszt()
    {

        $names = [
            'Traza', 'Beep', 'Zsó', 'Musla',
            'D3n', 'Nekokota', 'Nhilerion'
        ];
        $randomNameKey = array_rand($names, 1);
        $randomName = $names[$randomNameKey];

    return view('pages.teszt', compact('randomName'));
    }
public function names()
    {
        $names = [
            'Traza', 'Beep', 'Zsó', 'Musla',
            'D3n', 'Nekokota', 'Nhilerion'
        ];
        return view('pages.names', compact('names'));
    }

public function namesCreate($name)
{
    $nameRecord = new Name();
    $nameRecord->name = $name;
    $nameRecord->save();

    return $nameRecord->id;
}

}