<?php

namespace App;

enum UserStatus : string
{
    case  Active =  'Active';
    case inActive = 'in_active';
    case banned = 'banned';
}
