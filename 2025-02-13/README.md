## 2025-02-13

### bekrage web

* django 로 만들어진 앱 + MySQL
* docker-compose.yml 에 두 개의 서비스 넣음
   * MySQL을 외부의 것을 쓰고 있었는데 접속 정보 바꾸는 일 발생할 것 같아서 앱과 함께 컨테이너로 만듦
   * MySQL을 MariaDB 로 바꾸고 높은 버전으로 업그레이드 함
* MySQL 데이터는 호스트의 /data/bekragedb-data에
* django 앱의 데이터는 호스트의 /data/bekrageweb-data에
* 오래된 js, css 파일들 CDN에 있던 것 올바로 접속 되는 거 찾아서 넣음. cloudflare의 cdn 좋음
* 자세한 건 /home/bekrage/projects/bekrage/docker-compose.yml 참고
