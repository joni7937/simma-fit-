pipeline {
    agent any

    environment {
        DOCKER_IMAGE = 'simma-fit-image'
    }

    stages {
        stage('Checkout') {
            steps {
                // Получаем код из репозитория
                git 'https://github.com/joni7937/simma-fit-.git'
            }
        }

        stage('Build') {
            steps {
                script {
                    // Сборка Docker образа
                    docker.build(DOCKER_IMAGE)
                }
            }
        }

        stage('Test') {
            steps {
                script {
                    // Пример выполнения тестов
                    docker.image(DOCKER_IMAGE).inside {
                        sh 'python -m unittest discover tests/'
                    }
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    // Деплой Docker контейнера (например, на сервер или локально)
                    docker.image(DOCKER_IMAGE).push()
                }
            }
        }
    }
}
