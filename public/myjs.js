$('.mylike').on('click' , function(event) {
    event.preventDefault();
    var isLike = event.target.id == "like" ? 1 : 0;
    $.ajax({
        method : 'POST',
        url: urlLike ,
        data: {isLike: isLike, threadId: threadId, _token: token}
    })
        .done(function () {
            if(isLike) {
                if(isliked1 == 0) {
                    document.getElementById("count_likes").innerText = Number(document.getElementById("count_likes").innerText) +2;
                    isliked1 = 1;
                } else if(isliked1 == 1) {
                    document.getElementById("count_likes").innerText = Number(document.getElementById("count_likes").innerText)-1;
                    isliked1 = 2;
                } else {
                    document.getElementById("count_likes").innerText = Number(document.getElementById("count_likes").innerText)+1;
                    isliked1 = 1;
                }
            } else {

                if(isliked1 == 0) {
                    document.getElementById("count_likes").innerText = Number(document.getElementById("count_likes").innerText) +1;
                    isliked1 = 2;
                } else if(isliked1 == 1) {
                    document.getElementById("count_likes").innerText = Number(document.getElementById("count_likes").innerText)-2;
                    isliked1 = 0;
                } else {
                    document.getElementById("count_likes").innerText = Number(document.getElementById("count_likes").innerText)-1;
                    isliked1 = 0;
                }
            }
        });
})
