<?php

Threaded — Threaded 类
Threaded::chunk — 操作
Threaded::count — 操作
Threaded::extend — Runtime Manipulation
Threaded::from — Creation
Threaded::getTerminationInfo — 错误检测
Threaded::isRunning — 状态检测
Threaded::isTerminated — 状态检测
Threaded::isWaiting — 状态检测
Threaded::lock — 同步控制
Threaded::merge — 操作
Threaded::notify — 同步控制
Threaded::notifyOne — Synchronization
Threaded::pop — 操作
Threaded::run — 执行
Threaded::shift — Manipulation
Threaded::synchronized — 同步控制
Threaded::unlock — 同步控制
Threaded::wait — Synchronization
Thread — Thread 类
Thread::detach — 执行
Thread::getCreatorId — 识别
Thread::getCurrentThread — 识别
Thread::getCurrentThreadId — 识别
Thread::getThreadId — 识别
Thread::globally — 执行
Thread::isJoined — 状态监测
Thread::isStarted — 状态检测
Thread::join — 同步
Thread::kill — 执行
Thread::start — 执行
Worker — Worker 类
Worker::collect — Collect references to completed tasks
Worker::getStacked — 获取剩余的栈大小
Worker::isShutdown — 状态检测
Worker::isWorking — 状态检测
Worker::shutdown — 关闭 Worker
Worker::stack — 将要执行的任务入栈
Worker::unstack — 将要执行的任务出栈
Collectable — The Collectable interface
Collectable::isGarbage — Determine whether an object has been marked as garbage
Collectable::setGarbage — Mark an object as garbage
Modifiers — 方法修饰符
Pool — Pool 类
Pool::collect — 回收已完成任务的引用
Pool::__construct — 创建新的 Worker 对象池
Pool::resize — 改变 Pool 对象的可容纳 Worker 对象的数量
Pool::shutdown — 停止所有的 Worker 对象
Pool::submit — 提交对象以执行
Pool::submitTo — 提交一个任务到特定的 Worker 以执行
Mutex — Mutex 类
Mutex::create — 创建一个互斥量
Mutex::destroy — 销毁互斥量
Mutex::lock — 给互斥量加锁
Mutex::trylock — 尝试给互斥量加锁
Mutex::unlock — 释放互斥量上的锁
Cond — Cond 类
Cond::broadcast — 广播条件变量
Cond::create — 创建一个条件变量
Cond::destroy — 销毁条件变量
Cond::signal — 发送唤醒信号
Cond::wait — 等待
Volatile — The Volatile class
