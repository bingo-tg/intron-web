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
							<td>メールアドレス</td>
							<td><?php echo htmlspecialchars($_SESSION['join']['mail']); ?></td>
						</tr>
						<tr>
							<td>お問い合わせ内容</td>
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
	$subject = 'Message From IntronHP';
	$message = 
		"お名前：".htmlspecialchars($_SESSION['join']['name']).
		"\nふりがな：".htmlspecialchars($_SESSION['join']['kana']).
		"\n性別：".htmlspecialchars($_SESSION['join']['sex']).
		"\nメールアドレス：".htmlspecialchars($_SESSION['join']['mail']).
		"\nその他のご質問など：".htmlspecialchars($_SESSION['join']['question']);
	mail($to, $subject, $message);
?>