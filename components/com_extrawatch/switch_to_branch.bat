set BRANCH=branches/%1
set ROOT_DIR=d:\work\j16

svn cleanup components\com_extrawatch
svn cleanup administrator\components\com_extrawatch
svn cleanup modules\mod_extrawatch_agent
svn cleanup modules\mod_extrawatch_users
svn cleanup modules\mod_extrawatch_visitors


svn switch https://extrawatch.googlecode.com/svn/%BRANCH%/components/com_extrawatch %ROOT_DIR%\components\com_extrawatch
svn switch https://extrawatch.googlecode.com/svn/%BRANCH%/administrator/components/com_extrawatch %ROOT_DIR%\administrator\components\com_extrawatch
svn switch https://extrawatch.googlecode.com/svn/%BRANCH%/modules/mod_extrawatch_agent  %ROOT_DIR%\modules\mod_extrawatch_agent
svn switch https://extrawatch.googlecode.com/svn/%BRANCH%/modules/mod_extrawatch_users  %ROOT_DIR%\modules\mod_extrawatch_users
svn switch https://extrawatch.googlecode.com/svn/%BRANCH%/modules/mod_extrawatch_visitors %ROOT_DIR%\modules\mod_extrawatch_visitors
