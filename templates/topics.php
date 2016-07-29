<?php include('includes/header.php'); ?>
<ul id="topics">
						
	<?php if($topics) : ?>
		<?php foreach($topics as $topic) : ?>
			<li class="topic">
				<div class="row">
					<div class="col-md-2">
						<a href="<?php echo BASE_URI . $topic->username; ?>">
							<img class="avatar pull-left" src="<?php echo BASE_URI; ?>img/avatars/<?php echo $topic->user_id . '/' . $topic->avatar; ?>"/>
						</a>
					</div>
					<div class="col-md-10">
						<div class="topic-content">
							<h3><a href="<?php echo BASE_URI; ?><?php echo urlFormat($topic->username); ?>/<?php echo urlFormat($topic->title); ?>"><?php echo $topic->title; ?></a></h3>
							<div class="topic-info">
								<a href="<?php echo BASE_URI; ?>topics/<?php echo urlFormat($topic->name); ?>"><?php echo $topic->name; ?></a> >> 
								<a href="<?php echo BASE_URI; ?><?php echo urlFormat($topic->username); ?>/topics"><?php echo $topic->username; ?></a> >>
								<?php echo formatDate($topic->create_date); ?>
								<span class="badge pull-right"><?php echo replyCount($topic->id); ?></span>
							</div>
						</div>
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	<?php else : ?>
		<p>No topics to display</p>
	<?php endif; ?>
</ul>
	<h3>MyMentor.Codes Stats</h3>
<ul>
	<li>Total Users: <strong><?php echo $totalUsers; ?></strong></li>
	<li>Total Topics: <strong><?php echo $totalTopics; ?></strong></li>
</ul>
<?php include('includes/footer.php'); ?>