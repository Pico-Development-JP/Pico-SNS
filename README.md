# pico-sns
Pico Plugin: SNSの指定をメタデータとして取り込むプラグイン

## テンプレートに追加する値

 * Twitter: Twitterアカウントを記入可能なフィールド
 * Facebook: Facebookアカウントを〃
 * Github: Githubアカウントを〃
 * Youtube: Youtubeアカウントを〃
 
##  追加するTwig変数
それぞれのページに追加されます。({{page.twitter}}などで呼び出し)

 * twitter: 記事に指定したTwitterアカウント名
 * facebook: 記事に指定したFacebookアカウント名
 * github: 記事に指定したGithubアカウント名
 * youtube: 記事に追加したYoutubeアカウント名
 
##  コンフィグオプション
なし