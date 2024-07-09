CREATE TABLE `t_pay` (
                         `id` INT(11) NOT NULL AUTO_INCREMENT,
                         `create_time` DATETIME NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建订单时间',
                         `custom` VARCHAR(5) NULL DEFAULT NULL COMMENT '是否任意金额' COLLATE 'utf8_general_ci',
                         `device` VARCHAR(1000) NULL DEFAULT NULL COMMENT '设备' COLLATE 'utf8_general_ci',
                         `email` VARCHAR(255) NULL DEFAULT NULL COMMENT '邮箱' COLLATE 'utf8_general_ci',
                         `info` VARCHAR(255) NULL DEFAULT NULL COMMENT '用户备注' COLLATE 'utf8_general_ci',
                         `mobile` VARCHAR(5) NULL DEFAULT NULL COMMENT '是否移动设备' COLLATE 'utf8_general_ci',
                         `money` DECIMAL(19,2) NULL DEFAULT NULL COMMENT '金额',
                         `nick_name` VARCHAR(255) NULL DEFAULT NULL COMMENT '昵称' COLLATE 'utf8_general_ci',
                         `server_list` VARCHAR(255) NULL DEFAULT NULL COMMENT '区服' COLLATE 'utf8_general_ci',
                         `pay_type` VARCHAR(255) NULL DEFAULT NULL COMMENT '支付方式' COLLATE 'utf8_general_ci',
                         `state` INT(11) NULL DEFAULT '0' COMMENT '显示状态 0待审核 1确认显示 2驳回 3通过不展示 4已扫码',
                         `test_email` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
                         `update_time` DATETIME NULL DEFAULT NULL,
                         `pay_num` CHAR(11) NULL DEFAULT NULL COMMENT '订单编号' COLLATE 'utf8_general_ci',
                         PRIMARY KEY (`id`) USING BTREE
)
    COLLATE='utf8_general_ci'
    ENGINE=MyISAM
    AUTO_INCREMENT=36
;
