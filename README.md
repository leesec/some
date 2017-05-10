(Same Origin Method Execution)SOME ATTACK DEMO 
同源方法执行攻击demo

危害：类似于xss

利用方法：

1.attacker 构造2个页面 main.html and step1.html

2.攻击者发现www.leesec.com.callback.php页面过滤了xss代码，但是没有过滤 . 符号，可以利用opener.test来调用www.leesec.com.test.php页面











