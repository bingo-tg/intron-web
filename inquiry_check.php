<?php session_start(); ?>
<?php include 'header.php'; ?>
			<div id="main">
				<h1>お問い合わせ内容確認</h1>
				<div id="inquiry">
					<p>以下の内容でお間違いがないかご確認ください。</p>
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
					<br>
					<br>
					<form method="post" action="inquiry_send.php">
						<div>
							<label></label>
							<label id="policy"><a href="policy.php">プライバリーポリシー</a>に同意して</label>
							<input type="submit" id="submit" value="送信">
						</div>
					</form>
				</div>
				<br>
				<br>
			</div>
<?php include 'footer.php'; ?>