@servers(['web' => '127.0.0.1'])

@task('deploy')
    cd ~/projects/test
    git pull origin master
@endtask
