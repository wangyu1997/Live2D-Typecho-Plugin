# Live2D-Typecho-Plugin
![](https://i.loli.net/2018/03/10/5aa37fc4ba2ca.png)

又来水文了……把可爱的看板娘捉到博客上吧！

> 野生的 Pio 相当少见，但是一只鲜活的 Pio 可以为我们提供一整天的能量。注意不要发出任何声音，跟着我悄悄地从后面接近她……

好几个月前，[@Jad](https://imjad.cn/) 大佬写了一篇文章 ，然后一众大佬都开始把可爱的看板娘捉到自己的博客上，一时间出现 Pio 血洗个人博客的壮观景象。

然后有几位大佬把 Live2D 封装成了适用于各个平台的插件，目前我知道的有：

> [@保罗](https://paugram.com/) 写的 Typecho 适用的插件 [项目介绍](https://paugram.com/coding/add-poster-girl-with-plugin.html) [项目地址](https://github.com/Dreamer-Paul/Pio)。
>
> [@DaiDR](https://daidr.me/) 写的 WordPress 版 [项目介绍](https://daidr.me/archives/code-176.html)
>
> [@小白-白](https://www.fczbl.vip/) 写的 WordPress 版，模型是 2233 [项目介绍](https://www.fczbl.vip/946.html)

后来我参照 [@后宫学长](https://haremu.com/) 的介绍文章与上述的文章自己也试了试，都是直接在网页代码上改的，有一点点不方便，特别是主题需要更新什么的，就又要来一遍。虽说已经有了 Typecho 的插件版，不该重复造轮子，但由于已有的 Typecho 插件没有交互的功能，而且最近我突然对写 Typecho 插件有点感兴趣，所以决定自己写一个，于是参照了上面几位大佬的代码鼓捣了一个出来。

#### 功能

* 返回主页按钮
* 随机换装按钮
* 一言（Hitokoto）按钮
* 隐藏按钮
* 大小自适应。在屏幕较小的时候，会取消掉交互功能。
* 鼠标悬浮提示。加入更多的提示语句可以自己修改 `message.json`

#### 食用方法

* 下载或者 Clone 这个 Repo，解压后把文件夹改名为 `Live2D` ，扔到 `/usr/plugins/`目录下。
* 到插件配置面板里设置你的主页链接和模型相关的参数。为了实现换装的功能，用了比较笨的方法，具体的在插件配置面板里有描述。
* 这样一只可爱的 Pio 就会出现在博客的左下角。

#### 注意事项

* 按钮使用的是 `glyphicon` 的图标，如果你的站没有引入或者引入的是别的图标库，比如 FontAwesome 等，则需要手动引入一下，或者去 `Plugin.php` 里找到相关代码，把对应的 class 改成你博客支持的图标。
* 使用前记得在插件设置面板里把该填的填了。
* 插件里带了 3 套衣服，更多的模型……应该还蛮好找的吧……

------

本项目参照了：

 [journey-ad/live2d_src](https://github.com/journey-ad/live2d_src) | [galnetwen/Live2D](galnetwen/Live2D) | [Dreamer-Paul/Pio](https://github.com/Dreamer-Paul/Pio) 

参照的文章有：

[给博客添加能动的看板娘(Live2D)-将其添加到网页上吧](https://imjad.cn/archives/lab/add-dynamic-poster-girl-with-live2d-to-your-blog-02)

[Live2D！把可爱的看板娘捕捉到你的博客去吧](https://haremu.com/p/205)

[给你的博客增加动态看板娘](https://paugram.com/coding/add-poster-girl-with-plugin.html)

感谢各位大佬！