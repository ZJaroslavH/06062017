<?php

Route::get("/room/{id}", function ($id) {
    $rooms =[
        "1" => [
            "title" => "Комната",
            "description" => "Комната. Твоя. Воняет. Зато твоя собственная",
            "actions" => [
                "Выйти из комнаты" => "2",
                "Продолжить лежать на кроватке" => "3",
                "Покушать" => "3"
            ]
        ],
        "2" => [
            "title" => "Улица",
            "description" => "Улица. Не твоя. Воняет. Дома было лучше",
            "actions" => [
                "1" => "2",
                "2" => "2",
                "3" => "2"
            ]
        ],
        "3" => [
            "title" => "Комната",
            "description" => "Ничего не произошло. Ты остался дома и остался жив. Поздравляю. ТЫ ПОБЕДИЛ!",
            "actions" => [
                "1" => "2",
            ]
        ]
    ];
    $room = $rooms[$id];
   return view("quest", ["room" => $room]);
})->name("room");

Route::get("/", function () {
    return redirect()->route("room", ["id" => 1]);
});