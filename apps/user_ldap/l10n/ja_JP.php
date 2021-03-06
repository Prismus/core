<?php $TRANSLATIONS = array(
"Host" => "ホスト",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "SSL通信しない場合には、プロトコル名を省略することができます。そうでない場合には、ldaps:// から始めてください。",
"Base DN" => "ベースDN",
"You can specify Base DN for users and groups in the Advanced tab" => "拡張タブでユーザとグループのベースDNを指定することができます。",
"User DN" => "ユーザDN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "クライアントユーザーのDNは、特定のものに結びつけることはしません。 例えば uid=agent,dc=example,dc=com. だと匿名アクセスの場合、DNとパスワードは空のままです。",
"Password" => "パスワード",
"For anonymous access, leave DN and Password empty." => "匿名アクセスの場合は、DNとパスワードを空にしてください。",
"User Login Filter" => "ユーザログインフィルタ",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "ログインするときに適用するフィルターを定義する。%%uid がログイン時にユーザー名に置き換えられます。",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "%%uid プレースホルダーを利用してください。例 \"uid=%%uid\"",
"User List Filter" => "ユーザリストフィルタ",
"Defines the filter to apply, when retrieving users." => "ユーザーを取得するときに適用するフィルターを定義する。",
"without any placeholder, e.g. \"objectClass=person\"." => "プレースホルダーを利用しないでください。例 \"objectClass=person\"",
"Group Filter" => "グループフィルタ",
"Defines the filter to apply, when retrieving groups." => "グループを取得するときに適用するフィルターを定義する。",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "プレースホルダーを利用しないでください。例 \"objectClass=posixGroup\"",
"Port" => "ポート",
"Base User Tree" => "ベースユーザツリー",
"Base Group Tree" => "ベースグループツリー",
"Group-Member association" => "グループとメンバーの関連付け",
"Use TLS" => "TLSを利用",
"Do not use it for SSL connections, it will fail." => "SSL接続に利用しないでください、失敗します。",
"Case insensitve LDAP server (Windows)" => "大文字／小文字を区別しないLDAPサーバ（Windows）",
"Turn off SSL certificate validation." => "SSL証明書の確認を無効にする。",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "接続がこのオプションでのみ動作する場合は、LDAPサーバのSSL証明書をownCloudサーバにインポートしてください。",
"Not recommended, use for testing only." => "推奨しません、テスト目的でのみ利用してください。",
"User Display Name Field" => "ユーザ表示名のフィールド",
"The LDAP attribute to use to generate the user`s ownCloud name." => "ユーザのownCloud名の生成に利用するLDAP属性。",
"Group Display Name Field" => "グループ表示名のフィールド",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "グループのownCloud名の生成に利用するLDAP属性。",
"in bytes" => "バイト",
"in seconds. A change empties the cache." => "秒。変更後にキャッシュがクリアされます。",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "ユーザ名を空のままにしてください（デフォルト）。そうでない場合は、LDAPもしくはADの属性を指定してください。",
"Help" => "ヘルプ"
);
