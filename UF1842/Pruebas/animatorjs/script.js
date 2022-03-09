var Frame = Animator.Frame;
var Queue = Animator.Queue;

var ball = document.getElementById('ball');
var platform = document.getElementById('platform');
var frames = [];
var timing_functions = ['cubic-bezier(0,0,.7,0)', 'cubic-bezier(0,0,.35,1)'];
var total = 6;
var position_y = [50, 100, 140, 160, 175];

for(var i = 0; i < total; ++ i) {
var duration = 900 - i * 160;

frames.push(new Frame(
{ transform: 'translateY(180px)' },
{ 
duration: duration,
'timing-function': timing_functions[0]
}
));

if(i < total - 1) {
frames.push(new Frame(
{ transform: 'translateY(' + position_y[i] + 'px)' },
{ 
duration: duration,
'timing-function': timing_functions[1]
}
));
}
}

var q_platform = new Queue(platform, new Frame({ width: '50px' }, 600), { applyOnEnd: true });
var q_ball = new Queue(ball, frames, { applyOnEnd: true });

q_platform.play().then(function() { q_ball.play() });