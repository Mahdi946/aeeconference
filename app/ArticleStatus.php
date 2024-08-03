<?php

namespace App;

enum ArticleStatus: string
{
    case Edit = 'Edit';
    case Submited = 'Submited';
    case Rejected = 'Rejected';
    case Approved = 'Approved';
    case Winned = 'Winned';
}
