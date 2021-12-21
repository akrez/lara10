<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private static $posts = [
        1 => [
            'header' => 'react',
            'body' => 'Declarative: React makes it painless to create interactive UIs. Design simple views for each state in your application, and React will efficiently update and render just the right components when your data changes. Declarative views make your code more predictable, simpler to understand, and easier to debug.',
        ],
        2 => [
            'header' => 'پاور گرین 800 وات GP800B-HP EVO',
            'body' => 'https://cdn.lioncomputer.com/images/2020/08/16/gp700b-hp_evo_6_3d8db6bf9ee95bd5.png گیمرهای حرفه ای همواره مشتریانی بسیار سخت گیر در انتخاب پاور به شمار می روند. طراحی ظاهری خاص و زیبا، نویز صوتی بسیار پایین، نورپردازی خیره کننده ARGB، ثبات فوق العاده بالا ولتاژهای خروجی و قطعات با کیفیت به کار رفته در ساخت پاور در کنار عمر و گارانتی طولانی مدت، از مهم ترین ویژگی هایی است که این قشر از کاربران، از یک پاور حرفه ای انتظار دارند. در منابع تغذیه سری HP EVO گرین به لطف طراحی ظاهری خاص و توپولوژی های مدرن به کار رفته در بخش های مختلف سعی شده تا نیازها و انتظارات حتی سخت گیرترین گیمرهای حرفه ای نیز برآورده شود.',
        ],
        3 => [
            'header' => 'طراحی وب سایت از نقطه صفر | Git در یک جلسه',
            'body' => 'در این ویدئو می خوایم با هم تو 40 دقیقه Git را یاد بگیریم و بتونیم ازش استفاده کنیم . برای پشتیبانی و حمایت از ادامه تولید ویدئوها از طریق https://reymit.ir/alialaei اقدام بفرمائید.',
        ],
    ];

    public function indexAction()
    {
        return view('post.index', [
            'posts' => static::$posts,
        ]);
    }

    public function viewAction($id)
    {
        return view('post.view', [
            'post' => static::$posts[$id],
        ]);
    }
}
