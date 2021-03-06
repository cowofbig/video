<?php
return [
	/*
	|--------------------------------------------------------------------------
	| 认证模式
	|--------------------------------------------------------------------------
	| 时时认证: 每次请求都查找RBAC表数据进行验证
	| 登录认证: 登录后将该用户的权限信息保存到会话中,因为减少了表操作所以处理较时时认证要快,
	| 但在用户登录时更改了该用户的权限时,需要用户下次登录才有效
	*/
	'type'           => 1,

	/*
	|--------------------------------------------------------------------------
	| 管理员帐号
	|--------------------------------------------------------------------------
	| 使用管理员帐号登录后可以访问任何方法,RBAC不进行验证拥有最大的权限
	*/
	'super_user'     => 'admin',

	/*
	|--------------------------------------------------------------------------
	| 用户名字段
	|--------------------------------------------------------------------------
	| 用户角色表中的保存帐号的字段
	*/
	'username_field' => 'username',

	/*
	|--------------------------------------------------------------------------
	| 密码字段
	|--------------------------------------------------------------------------
	| 用户角色表中的保存密码的字段
	*/
	'password_field' => 'password',

	/*
	|--------------------------------------------------------------------------
	| 验证字段
	|--------------------------------------------------------------------------
	| 用户登录成功后用于记录用户在用户表中主键值的SESSION字段
	*/
	'auth_key'       => 'id',

	/*
	|--------------------------------------------------------------------------
	| 不需要验证请求
	|--------------------------------------------------------------------------
	| 不需要验证请求:
	| 如:值为 ['Admin.User.add']时,访问Admin模块 User控制器 add动作 不进行验证。
	*/
	'no_auth'         => [ ],
	/*
	|--------------------------------------------------------------------------
	| 用户角色表
	|--------------------------------------------------------------------------
	*/
	'user_table'      => 'user',

	/*
	|--------------------------------------------------------------------------
	| 角色表
	|--------------------------------------------------------------------------
	*/
	'role_table'      => 'role',

	/*
	|--------------------------------------------------------------------------
	| 节点表
	|--------------------------------------------------------------------------
	*/
	'node_table'      => 'node',

	/*
	|--------------------------------------------------------------------------
	| 角色与用户关联表
	|--------------------------------------------------------------------------
	*/
	'user_role_table' => 'user_role',

	/*
	|--------------------------------------------------------------------------
	| 权限分配表
	|--------------------------------------------------------------------------
	*/
	'access_table'    => 'access',
];