<?php

namespace App;

enum ArticleStatus: int
{
    case Edit = 0;
    case Submited = 1;
    case Rejected = 2;
    case Approved = 3;
    case Winned = 4;
}
