pipeline {
    agent any
    environment {
        // Переменная для хранения Docker образа
        DOCKER_IMAGE = 'my-app-image'
        DOCKER_REGISTRY = 'docker.io/joni7937'
    }
    stages {
        // Этап сборки Docker-образа
        stage('Build') {
            steps {
                script {
                    echo 'Building Docker image...'
                    bat 'docker build -t %DOCKER_REGISTRY%/%DOCKER_IMAGE% .'  // Используем команду bat для Windows
                }
            }
        }

        // Этап тестирования
        stage('Test') {
            steps {
                script {
                    echo 'Running tests...'
                    bat 'docker run --rm %DOCKER_REGISTRY%/%DOCKER_IMAGE% pytest'  // Команда для тестов в контейнере
                }
            }
        }

        // Этап развертывания
        stage('Deploy') {
            steps {
                script {
                    echo 'Deploying Docker container...'
                    bat 'docker run -d -p 8080:8080 %DOCKER_REGISTRY%/%DOCKER_IMAGE%'  // Запуск контейнера
                }
            }
        }
    }
    post {
        always {
            echo 'Cleaning up...'
            // Очистка после выполнения пайплайна
            bat 'docker system prune -f'
        }
    }
}

