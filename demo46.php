<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/10/13 0013
 * Time: 下午 8:44
 */
// 系统V 消息队列 key ,信号量 key 共享存储 key
// 信号量的用途：主要是用于多进程/多线程对公共资源对象的访问控制【跟多线程的互斥量是一样的道理】
// 多进程，多个进程同时对一个公共资源访问，就可能引发数据错误
// pcntl_fork [fork] 业务代码【php是使用一条语句来编写的，echo 1+2;】 write(1,123)
// 这个系统调用函数，程序是可以是二进制文件，php[c]-->汇编【是有多条汇编语句】---》对应多条指令
// 一条高级语言变成多条汇编语句【汇编语句也会对应多条机器指令】
// c/c++
// 多个进程在运行/多个线程在运行，如果某个线程/进程正执行加法运算【机器指令是非常多的】可能执行一半
// 其它进程又对这个公共资源进行了访问【读写】，这个时候很容易破坏数据

// 多线程一般是并发执行【cpu多核，4核心，4个线程会同时执行，4个流水线的工人同时在干活】
// 如果有对公共资源的访问如果 没有做这个同步处理，很容易造成数据破坏 】

// 线程，进程在Linux 叫任务Task c++ 互斥锁，条件变量，信号量去解决
// system v IPC 信号量非常复杂 posix 信号量
// 在开发多进程的时候才会遇到，一般来说phper几乎很少遇到要用信号量的场景，flock

// 信号量分类：二值信号量binary semaphore 它的值是0和1，可以通过相函数修改它的值，这种操作称为PV原语
// P就是减1操作【当前值如果不是1，进程就会阻塞，表示当前资源该进程不可访问】
// V就是加1操作【当前值是0就可以加1操作，同时会释放当前的资源让其它进程有机会执行P，就有机会访问公共资源】

// 计数信号量，计算器，它的值从0 到某个最大值
// 计算信号量集：我们可以认为是个数组，系统V信号量其实就是指信号量集，它的系统调用函数有点复杂

// system v 信号量
$file = "demo46.txt";
$count=0;
file_put_contents($file,$count);

$pid = pcntl_fork();
// 如果这些语句翻译成汇编语句【机器指令】
if ($pid==0){

    $x = (int)file_get_contents($file);
    for ($i=0;$i<10000;$i++){
        $x+=1;
    }
    file_put_contents($file,$x);//这条语句其实对应的机器指令不可能是一条，是多条，可能指令只执行一半，就被其它进程打断
    //数据就破坏了
    exit(0);
}

$x = (int)file_get_contents($file);
for ($i=0;$i<10000;$i++){
    $x+=1;
}
file_put_contents($file,$x);