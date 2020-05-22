<?php

namespace App\Http\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class UserWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Voyager::model('User')->count();
        $string = "共計使用者{$count}位";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-backpack',
            'title'  => "{$count}個使用者",
            'text'   => $string,
            'button' => [
                'text' => "查詢使用者",
                'link' => route('voyager.users.index'),
            ],
            'image' => Voyager::image('bubblegum.png'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        // return Auth::user()->can('browse', Voyager::model('User'));
        return true;
    }
}
