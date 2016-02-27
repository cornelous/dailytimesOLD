############################################
# Setup Server
############################################

set :stage, :zambia
set :stage_url, "http://dailytimes.co.zm"
server "159.203.104.176", user: "clive", roles: %w{web app db}

set :pty, true

set :ssh_options, {
    auth_methods: %w(password),
    password: 'plutoris',
    user: 'clive',
}

set :deploy_to, "/var/www/vhosts/dailytimes.co.zm"

############################################
# Setup Git
############################################

set :branch, "master"

############################################
# Extra Settings
############################################

#specify extra ssh options:

#set :ssh_options, {
#    auth_methods: %w(password),
#    password: 'password',
#    user: 'username',
#}

#specify a specific temp dir if user is jailed to home
#set :tmp_dir, "/path/to/custom/tmp"
