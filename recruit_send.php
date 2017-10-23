<?php session_start(); ?>
<?php include 'header.php'; ?>
			<div id="main">
				<h1>お問い合わせしました</h1>
				<div id="inquiry">
					<p>以下の内容でお問い合わせを実行しました。</p>
					<br>
					<table>
						<tr>
							<td>お名前</td>
							<td><?php echo htmlspecialchars($_SESSION['join']['name']); ?></td>
						</tr>
						<tr>
							<td>ふりがな</td>
							<td><?php echo htmlspecialchars($_SESSION['join']['kana']); ?></td>
						</tr>
						<tr>
							<td>性別</td>
							<td><?php if(htmlspecialchars($_SESSION['join']['sex']) == 'male'): ?>男性<?php endif; ?><?php if(htmlspecialchars($_SESSION['join']['sex']) == 'female'): ?>女性<?php endif; ?></td>
						</tr>
						<tr>
							<td>郵便番号</td>
							<td><?php echo htmlspecialchars($_SESSION['join']['number']); ?></td>
						</tr>
						<tr>
							<td>住所・番地</td>
							<td><?php echo htmlspecialchars($_SESSION['join']['address']); ?></td>
						</tr>
						<tr>
							<td>建物名</td>
							<td><?php echo htmlspecialchars($_SESSION['join']['building']); ?></td>
						</tr>
						<tr>
							<td>メールアドレス</td>
							<td><?php echo htmlspecialchars($_SESSION['join']['mail']); ?></td>
						</tr>
						<tr>
							<td>電話番号</td>
							<td><?php echo htmlspecialchars($_SESSION['join']['tel']); ?></td>
						</tr>
						<tr>
							<td>使えるプログラミング言語・ソフト</td>
							<td><?php echo htmlspecialchars($_SESSION['join']['ability']); ?></td>
						</tr>
						<tr>
							<td>その他のご質問など</td>
							<td><?php echo htmlspecialchars($_SESSION['join']['question']); ?></td>
						</tr>
					</table>
				</div>
				<br>
				<br>
			</div>
<?php include 'footer.php'; ?>
<?php
	$to = 'info@intronworks.jp';
	$subject = 'Recruit From IntronHP';
	$message = 
		"お名前：".htmlspecialchars($_SESSION['join']['name']).
		"\nふりがな：".htmlspecialchars($_SESSION['join']['kana']).
		"\n性別：".htmlspecialchars($_SESSION['join']['sex']).
		"\n郵便番号：".htmlspecialchars($_SESSION['join']['number']).
		"\n住所・番地：".htmlspecialchars($_SESSION['join']['address']).
		"\n建物名：".htmlspecialchars($_SESSION['join']['building']).
		"\nメールアドレス：".htmlspecialchars($_SESSION['join']['mail']).
		"\n電話番号：".htmlspecialchars($_SESSION['join']['tel']).
		"\n使えるプログラム言語・ソフト：".htmlspecialchars($_SESSION['join']['ability']).
		"\nその他のご質問など：".htmlspecialchars($_SESSION['join']['question']);
	mail($to, $subject, $message);
?>