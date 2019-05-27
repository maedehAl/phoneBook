<?php

Route::get("/create","ContactController@create")->name("createContact");

Route::post("/store","ContactController@store")->name("storeContact");

Route::get("/","ContactController@index")->name("indexContact");

Route::delete("/delete/{id}","ContactController@destroy")->name("destroyContact");

Route::get("/edit/{id}","ContactController@edit")->name("editContact");

Route::put("/update/{id}","ContactController@update")->name("updateContact");

