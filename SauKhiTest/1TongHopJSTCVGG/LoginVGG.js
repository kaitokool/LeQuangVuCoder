function Saos(){
  let biendem = 200;
  let classHome = document.querySelector('.hieuungdong');
  let i = 0;
  while(i<biendem){
      let Sao = document.createElement('i');
      let ToaDox = Math.floor(Math.random() * window.innerWidth);
      let du = Math.random() * 2;
      let doCao = Math.random() * 10;
      Sao.style.left = ToaDox + 'px';
      Sao.style.width = 1 + 'px';
      Sao.style.height = doCao + 'px';
      Sao.style.animationDuration = du + 's';
      classHome.appendChild(Sao);
      i++;
  }
}
Saos();