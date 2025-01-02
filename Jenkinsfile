pipeline {
    agent any

    environment {
        DOCKER_IMAGE = 'my-app-image'
        DOCKER_REGISTRY = 'docker.io/joni7937'
    }

    stages {
        stage('Build') {
            steps {
                script {
                    echo 'Building Docker image...'
                    bat "docker build -t ${DOCKER_REGISTRY}/${DOCKER_IMAGE} ."
                }
            }
        }
        
        stage('Test') {
            steps {
                script {
                    echo 'Running tests with PHPUnit...'
                    bat "docker run --rm ${DOCKER_REGISTRY}/${DOCKER_IMAGE} /usr/local/bin/phpunit"
                }
            }
        }
        
        stage('Deploy') {
            steps {
                script {
                    echo 'Deploying application...'
                    // Команды для деплоя
                }
            }
        }
    }
}

