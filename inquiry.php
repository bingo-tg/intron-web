<?php
	session_start();
	if(!empty($_POST)){
		if($_POST['name'] == '') {
			$error['name'] = 'blank';
		}
		if($_POST['kana'] == '') {
			$error['kana'] = 'blank';
		}
		if($_POST['mail'] == '') {
			$error['mail'] = 'blank';
		}
		if($_POST['question'] == '') {
			$error['question'] = 'blank';
		}
		if(empty($error)){
			$_SESSION['join'] = $_POST;
			header('Location: inquiry_check.php');
		}
	}
?>
<?php include 'header.php'; ?>
			<div id="main">
				<h1>お問い合わせ</h1>
				<br>
				<div id="inquiry">
					<p>
						お問い合わせはこちらから（<strong>*</strong>…必須項目）
						<?php if(!empty($error)): ?>
						<br>
						<strong>赤字の項目を入力してください。</strong>
						<?php endif; ?>
					</p>
					<form method="post" action="#inquiry">
						<div>
							<label>
								<?php if($error['name'] == 'blank'): ?><strong><?php endif; ?>
								お名前<strong>*</strong>
								<?php if($error['name'] == 'blank'): ?></strong><?php endif; ?>
							</label>
							<input type="text" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF-8'); ?>">
							<span class="radio">
								<input type="radio" id="male" name="sex" value="male">
								<label for="male">男性</label>
								<input type="radio" id="female" name="sex" value="female">
								<label for="female">女性</label>
							</span>
						</div>
						<div>
							<label>
								<?php if($error['kana'] == 'blank'): ?><strong><?php endif; ?>
								ふりがな<strong>*</strong>
								<?php if($error['kana'] == 'blank'): ?></strong><?php endif; ?>
							</label>
							<input type="text" id="kana" name="kana" value="<?php echo htmlspecialchars($_POST['kana'], ENT_QUOTES,'UTF-8'); ?>">
						</div>
						<div>
							<label>
								<?php if($error['mail'] == 'blank'): ?><strong><?php endif; ?>
								メールアドレス<strong>*</strong>
								<?php if($error['mail'] == 'blank'): ?></strong><?php endif; ?>
							</label>
							<input type="text" id="mail" name="mail" value="<?php echo htmlspecialchars($_POST['mail'], ENT_QUOTES,'UTF-8'); ?>">
						</div>
						<div>
							<label>
								<?php if($error['question'] == 'blank'): ?><strong><?php endif; ?>
								お問い合わせ内容<strong>*</strong>
								<?php if($error['question'] == 'blank'): ?></strong><?php endif; ?>
							</label>
							<textarea id="question" name="question"><?php echo htmlspecialchars($_POST['question'], ENT_QUOTES,'UTF-8'); ?></textarea>
						</div>
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