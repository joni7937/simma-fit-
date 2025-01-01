pipeline {
    agent any

    environment {
        DOCKER_IMAGE = 'simma-fit-image'
    }

    stages {
        stage('Checkout') {
            steps {
                // Получаем код из репозитория
                git branch: 'main', url: 'https://github.com/joni7937/simma-fit-.git'
            }
        }

        stage('Build') {
            steps {
                script {
                    // Собираем Docker образ
                    docker.build(DOCKER_IMAGE)
                }
            }
        }

        stage('Test') {
            steps {
                script {
                    // Запуск тестов внутри Docker контейнера
                    docker.image(DOCKER_IMAGE).inside {
                        sh 'python -m unittest discover tests/'
                    }
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    // Деплой Docker контейнера (например, на сервер)
                    docker.image(DOCKER_IMAGE).push()
                }
            }
        }
    }
}
