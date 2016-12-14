# PHP MVC Framwork ╮(￣▽￣)╭
## Learn by doing写一个MVC框架(为了装B😂😂😂)

# Introduce
## technology stack:
 - twig/twig 模板引擎
 - symfony/debug  error handler
 - illuminate/database Laravel's Orm | Active Recored 什么不会用，快去laravel官网查
 - symfony/console  还没用准备用
 - spl_autoload_register

# Configuration
1. composer require
2. 调试模式在入口文件index.php中设置(编码一定要设置成true，Twig有缓存文件的)
3. apache要开启重写(nginx同样)
4. 配置文件在App/config目录下
5. 数据库配置在App/config/database.php下
6. 函数库在Core/Common/Functions.php(感觉Common这个单词怪怪的)
7. Storage这个目录是一个缓存目录，记得给权限。

# Last
希望可以尽量的完善sda