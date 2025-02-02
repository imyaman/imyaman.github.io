## 2025-02-02

### SeaTable 설정

* Python script 실행은 서브시스템들이 아래 순서로 연결됨
SeaTable -> scheduler -> python starter -> python runner
* python starter가 호스트의 디렉토리에 스크립트 파일을 저장함
* python starter가 컨테이너 안에서 python runner 컨테이너 실행 명령을 함, runner로부터 결과를 받음. python runner는 호스트 위에서 실행되고, 호스트의 디렉토리의 스크립트 파일을 읽음
* python starter가 scheduler에게 결과를 줌, HTTP API로

runner 실행은 이런 식
```
docker run --name python-runner{tmp_id} \
--env-file /{host directory}/{tmp_id}/env.list \
-v /{host directory}/{tmp_id}:/scripts \
-v /etc/localtime:/etc/localtime \
--memory=2g seatable/seatable-python-runner:4.1.2 run
```

따라서 docker-compose 파일에서 주의할 점: PYTHON_TRANSFER_DIRETORY 환경변수에 host의 디렉토리를 주자. container 안의 디렉토리를 주면 안 된다. **이게 오늘 배운 점.**

```
  python-starter:
    volumes:
      - "{host directory}:/tmp"
    environment:
      - PYTHON_TRANSFER_DIRECTORY={host diretory}
```
