# blog
yaf php 7 

安装 twig
composer require twig/twig

**开启命令空间 php.ini**\
`yaf.use_namespace=1 ;开启命名空间
 yaf.use_spl_autoload=1 ;开启自动加载`<hr>
 ` 命名空间代码包在tag v1`
 
 blog 展示目录结构
 -
<pre><code>
-application                     # 应用块
    -controllers                 # 控制器目录
        index.php                # 控制器
    -library
    -models
    -plugins
    -views                       # 视图目录
    Bootstrap.php                # 启动脚本
-conf                            # 配置目录
    application.ini              # 配置文件
-public
-vendor                          # 第三方扩展包
.gitignore
.htaccess
composer.lock                    # 扩展包管理文件
index.php                        # 应用入口
README.md            
</code></pre>
 