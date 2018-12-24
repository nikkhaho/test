<?php

interface db
{
    public function con();

    public function insert();

    public function query();

    public function close();
}