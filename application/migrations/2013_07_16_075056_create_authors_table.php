<?php

class Create_Authors_Table

{
    public function up() {

        Schema::create("authors", function($table) {
            $table->increments("id");
            $table->string("username");
            $table->text("bio");
            $table->timestamps();

        });

    }

    public function down() {

        Schema::drop("authors");
    }
}
