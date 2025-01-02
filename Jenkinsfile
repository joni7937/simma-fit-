pipeline {
    agent any
    environment {
        GIT_REPO = 'https://github.com/joni7937/simma-fit-.git'
        DOCKER_IMAGE_NAME = 'simma-fit-app'
    }
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: "${GIT_REPO}"
            }
        }
        stage('Install Dependencies') {
            steps {
                sh 'composer install'  // PHP dependency manager
            }
        }
        stage('Run Tests') {
            steps {
                sh 'phpunit --configuration phpunit.xml'  // Run PHPUnit tests if configured
            }
        }
        stage('Build Docker Image') {
            steps {
                script {
                    sh 'docker build -t $DOCKER_IMAGE_NAME .'
                }
            }
        }
        stage('Push Docker Image') {
            steps {
                script {
                    // Replace with your Docker Hub credentials if needed
                    sh 'docker push $DOCKER_IMAGE_NAME'
                }
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying to production (or a test server)'
                // Deployment commands go here
            }
        }
    }
}
