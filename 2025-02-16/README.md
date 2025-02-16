
## 2025-02-16

### Seafile 설정

* Seafile 12에 wiki 기능 추가 되었다
* Seafile 12는 CSRF 설정 없어도 잘 동작한다
* seadoc 관련,
    * nginx에서, `locarion /sdoc-server/ {}` 안에 proxy\_pass에 끝에 /를 넣자
    * nginx에서, `location /socket-io {}` 안에 proxy\_pass에 끝에 /를 넣지 말자
* OnlyOffice와 깔끔하게 독립적이다. OnlyOffice에 도메인 네임을 주면, 여러 Seafile 인스턴스가 하나의 OnlyOffice 인스턴스를 공유할 수 있다
* .env를 잘 살펴보자

