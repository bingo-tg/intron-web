<?php
	session_start();
	if(!empty($_POST)){
		if($_POST['name'] == '') {
			$error['name'] = 'blank';
		}
		if($_POST['kana'] == '') {
			$error['kana'] = 'blank';
		}
		if($_POST['number'] == '') {
			$error['number'] = 'blank';
		}
		if($_POST['address'] == '') {
			$error['address'] = 'blank';
		}
		if($_POST['mail'] == '') {
			$error['mail'] = 'blank';
		}
		if($_POST['tel'] == '') {
			$error['tel'] = 'blank';
		}
		if(empty($error)){
			$_SESSION['join'] = $_POST;
			header('Location: recruit_check.php');
		}
	}
?>
<?php include 'header.php'; ?>
			<div id="main">
				<h1><img src="img/midasi-recruit.png"></h1>
				<br>
				<div id="application">
					<ul class="right">
						<li><img src="photo/DSC01987.jpg"></li>
						<li><img src="photo/DSC01988.jpg"></li>
					</ul>
					<p class="left">
						わたしたちと一緒にイントロンワークスで働きませんか？<br>
						<br>
						「求む、未来のIT戦士」<br>
						<br>
						これからの未来を作るのは僕ら世代。<br>
						ただ、若いうちってできることは少ない。<br>
						もっとできるようになったら...では何も変わらない。<br>
						できないなら学ぶ。分からないなら、調べる・聞く・考えぬく。<br>
						あらゆる手段を使って壁を超えていく。<br>
						<br>
						未来を作っていくために、仲間と共に壁を超える覚悟のある方。<br>
						イントロンワークスはそんなあなたを心よりお待ちしています。<br>
						<br>
						代表取締役　谷俊毅
					</p>
				</div>
				<div class="clear"></div>
				<br>
				<br>
				<br>
				<br>
				<div id="introduce">
					<a href="" id="next" class="text-next next2"><img src="img/right.png"></a>
					<a href="" id="prev" class="text-prev prev2"><img src="img/left.png"></a>
					<div id="slider" class="slider2">
						<img src="img/recruit_1010.png">
						<img src="img/recruit_1500.png">
						<img src="img/recruit_1800.png">
					</div>
				</div>
				<div class="clear"></div>
				<br>
				<br>
				<br>
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
								<?php if($error['number'] == 'blank'): ?><strong><?php endif; ?>
								郵便番号<strong>*</strong>
								<?php if($error['number'] == 'blank'): ?></strong><?php endif; ?>
							</label>
							<input type="text" id="number" name="number" value="<?php echo htmlspecialchars($_POST['number'], ENT_QUOTES,'UTF-8'); ?>">
						</div>
						<div>
							<label>
								<?php if($error['address'] == 'blank'): ?><strong><?php endif; ?>
								住所・番地<strong>*</strong>
								<?php if($error['address'] == 'blank'): ?></strong><?php endif; ?>
							</label>
							<input type="text" id="address" name="address" value="<?php echo htmlspecialchars($_POST['address'], ENT_QUOTES,'UTF-8'); ?>">
						</div>
						<div>
							<label>建物名</label>
							<input type="text" id="building" name="building" value="<?php echo htmlspecialchars($_POST['building'], ENT_QUOTES,'UTF-8'); ?>">
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
								<?php if($error['tel'] == 'blank'): ?><strong><?php endif; ?>
								電話番号<strong>*</strong>
								<?php if($error['tel'] == 'blank'): ?></strong><?php endif; ?>
							</label>
							<input type="text" id="tel" name="tel" value="<?php echo htmlspecialchars($_POST['tel'], ENT_QUOTES,'UTF-8'); ?>">
						</div>
						<div>
							<label>使えるプログラム言語・ソフト</label>
							<input type="text" id="ability" name="ability" value="<?php echo htmlspecialchars($_POST['ability'], ENT_QUOTES,'UTF-8'); ?>">
						</div>
						<div>
							<label>その他ご質問など</label>
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