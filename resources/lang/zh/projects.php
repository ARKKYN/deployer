<?php

return [

    'manage'            => '管理项目',
    'warning'           => '项目无法保存，请检查下面的表单',
    'none'              => '还没有建立任何项目',
    'name'              => '名称',
    'awesome'           => '我的绝佳 webapp',
    'group'             => '项目分组',
    'repository'        => 'Repository',
    'repository_url'    => 'Repository URL',
    'builds'            => '保留的 Build 数量',
    'build_options'     => 'Build 选项',
    'project_details'   => '项目详情',
    'branch'            => '默认 Branch',
    'image'             => 'Build 图',
    'ci_image'          => '如果你使用了可以生成图片来标识 build 状态的 CI 服务器，' .
                           '可以把 URL 放在这里让它显示在项目页面',
    'latest'            => '近期的部署',
    'create'            => '添加新项目',
    'edit'              => '编辑项目',
    'url'               => 'URL',
    'details'           => '项目详情',
    'deployments'       => '部署',
    'today'             => '今天',
    'last_week'         => '上周',
    'latest_duration'   => '近期的持续时间',
    'health'            => '体检',
    'build_status'      => 'Build 状态',
    'app_status'        => '应用程序状态',
    'heartbeats_status' => '心跳状态',
    'view_ssh_key'      => '查看 SSH 密钥',
    'private_ssh_key'   => 'SSH 私钥',
    'public_ssh_key'    => 'SSH 公钥',
    'ssh_key'           => 'SSH 密钥',
    'ssh_key_info'      => '如果想要使用特定的私钥，可以直接粘贴在这里。 密钥一定 ' .
                           '不能包含 passphrase',
    'ssh_key_example'   => '如果不输入，SSH 密钥将自动生成（推荐）',
    'deploy_project'    => '部署项目',
    'deploy'            => '部署',
    'redeploy'          => '重新部署',
    'server_keys'       => '密钥一定要添加到服务器上每个你想运行命令的用户的 <code>~/.ssh/authorized_keys</code> 文件中',
    'git_keys'          => '密钥也需要添加到 repository 的 <strong>Deploy Keys</strong> 中，' .
                           '除非你使用的是 公开的/无认证的 URL',
    'finished'          => '已完成',
    'pending'           => '正在等待',
    'deploying'         => '正在部署',
    'failed'            => '失败',
    'not_deployed'      => '未部署',
    'options'           => '选项',
    'change_branch'     => '允许其他 branches 被部署?',
    'include_dev'       => '安装 composer 开发包?',
    'insecure'          => '你的 Deployer 没有运行在安全的连接上，' .
                           '建议让 Deployer 自动生成 SSH 密钥，而不是使用你自己的密钥，这样私钥就不会在不安全的连接上传输',

];
