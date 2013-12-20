<?php

// Make sure we are called from index.php
if (!defined('SECURITY')) die('Hacking attempt');

$aErrorCodes['OK'] = 'OK';
$aErrorCodes['E0001'] = 'Out of Order Share Detected';
$aErrorCodes['E0002'] = 'Upstream shares not found';
$aErrorCodes['E0003'] = 'Failed to change shares order';
$aErrorCodes['E0004'] = 'Failed to reset previous block';
$aErrorCodes['E0005'] = 'Unable to fetch blocks upstream share';
$aErrorCodes['E0006'] = '链接后端RPC服务失败';
$aErrorCodes['E0007'] = 'Out of Order Share detected, autofixed';
$aErrorCodes['E0008'] = '删除归档的shares失败';
$aErrorCodes['E0009'] = 'Cron disabled by admin';
$aErrorCodes['E0010'] = 'Unable set payout as processed';
$aErrorCodes['E0011'] = 'No new unaccounted blocks';
$aErrorCodes['E0012'] = 'No share_id found for block';
$aErrorCodes['E0013'] = 'No shares found for block';
$aErrorCodes['E0014'] = 'Failed marking block as accounted';
$aErrorCodes['E0015'] = '发现可能重复支付';
$aErrorCodes['E0016'] = '删除账户share失败';
$aErrorCodes['E0017'] = 'Failed to update Uptime Robot status';
$aErrorCodes['E0018'] = 'Cron disbaled due to errors';
$aErrorCodes['E0019'] = "SQL查询失败: %s";
$aErrorCodes['E0020'] = 'SQL执行内部错误';
$aErrorCodes['E0021'] = '未能获取你的邀请信息';
$aErrorCodes['E0022'] = '创建邀请失败';
$aErrorCodes['E0023'] = '不合法的Email地址';
$aErrorCodes['E0024'] = '用户名只能包含字母或数字';
$aErrorCodes['E0025'] = '该Email已经被注册';
$aErrorCodes['E0026'] = '该地址的邀请已经存在了';
$aErrorCodes['E0027'] = '创建邀请token失败: %s';
$aErrorCodes['E0028'] = '发送邮件失败';
$aErrorCodes['E0029'] = '发送邀请失败';
$aErrorCodes['E0030'] = '该邀请没有合法的token';
$aErrorCodes['E0031'] = '发送邮件失败';
$aErrorCodes['E0032'] = '调用API失败: %s';
$aErrorCodes['E0033'] = 'Failed to store uptime status: %s';
$aErrorCodes['E0034'] = '标题只能包含字母或数字';
$aErrorCodes['E0035'] = '创建新闻纪录失败';
$aErrorCodes['E0036'] = '删除新闻纪录失败';
$aErrorCodes['E0037'] = '更新新闻纪录失败';
$aErrorCodes['E0038'] = '获取新闻纪录失败';
$aErrorCodes['E0039'] = '获取新闻纪录失败';
$aErrorCodes['E0040'] = '获取新闻激活纪录失败';
$aErrorCodes['E0041'] = '获取已经存在的通知失败';
$aErrorCodes['E0042'] = '获取已经激活的通知失败';
$aErrorCodes['E0043'] = '创建新通知失败';
$aErrorCodes['E0044'] = '获取用户通知失败';
$aErrorCodes['E0045'] = '获取用户通知设置失败';
$aErrorCodes['E0046'] = '获取用户通知设置失败';
$aErrorCodes['E0047'] = "更新 %s 设置失败";
$aErrorCodes['E0048'] = 'Failed to check for existing active payouts';
$aErrorCodes['E0049'] = '创建提款请求失败';
$aErrorCodes['E0050'] = '获取未处理提款失败';
$aErrorCodes['E0051'] = '提款正在处理中';
$aErrorCodes['E0052'] = 'Unable to find valid upstream share for block: %s';
$aErrorCodes['E0053'] = '矿工 %s 更新失败';
$aErrorCodes['E0054'] = '获取限制的矿工失败';
$aErrorCodes['E0055'] = '加载矿工详细信息失败';
$aErrorCodes['E0056'] = '加载矿工失败';
$aErrorCodes['E0057'] = 'Failed to fetch workers for admin panel';
$aErrorCodes['E0058'] = '矿工名/密码不能为空';
$aErrorCodes['E0059'] = '该矿工已经存在';
$aErrorCodes['E0060'] = '添加矿工失败';
$aErrorCodes['E0061'] = '删除矿工失败';
$aErrorCodes['E0062'] = 'Block has no share_id, not running payouts';
$aErrorCodes['E0063'] = 'Upstream share already assigned to previous block';
$aErrorCodes['E0064'] = '创建交易记录失败';
$aErrorCodes['E0065'] = '余额大于零';
$aErrorCodes['E0072'] = 'Worker names must be alphanumeric';
$aErrorCodes['E0073'] = 'Worker name is too long; try entering a shorter name'
?>
