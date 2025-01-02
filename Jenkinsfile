// Jenkinsfile для автоматизации процесса сборки, тестирования и деплоя PHP-проекта

pipeline {
    agent any

    environment {
        DOCKER_IMAGE = "simma-fit-php-app"
        DOCKER_REGISTRY = "joni7937" // Используйте Docker Hub или любой частный реестр
        GIT_REPO = "https://github.com/joni7937/simma-fit-.git"
    }

    stages {
        stage('Checkout') {
            steps {
                // Получаем последний код из репозитория Git
                git branch: 'main', url: "$GIT_REPO"
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    // Строим Docker-образ для приложения
                    echo 'Building Docker Image'
                    sh 'docker build -t $DOCKER_IMAGE .'
                }
            }
        }

        stage('Run Tests') {
            steps {
                script {
                    // Запускаем PHPUnit-тесты или любые другие тесты для PHP
                    echo 'Running Tests'
                    sh 'docker run --rm $DOCKER_IMAGE php vendor/bin/phpunit --configuration phpunit.xml'
                }
            }
        }

        stage('Deploy to Production') {
            steps {
                script {
                    // Разворачиваем на продакшн сервере
                    // Можно использовать Docker для деплоя или отправить образ в реестр Docker
                    echo 'Deploying to Production'
                    sh 'docker tag $DOCKER_IMAGE $DOCKER_REGISTRY/$DOCKER_IMAGE:latest'
                    sh 'docker push $DOCKER_REGISTRY/$DOCKER_IMAGE:latest'
                }
            }
        }
    }

    post {
        always {
            // Очистка Docker-контейнеров после завершения пайплайна
            echo 'Cleaning up'
            sh 'docker system prune -f'
        }

        success {
            echo 'Pipeline succeeded!'
        }

        failure {
            echo 'Pipeline failed!'
        }
    }
}
